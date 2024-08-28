<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Voter;
use App\Models\Slot;
use Number;

class DashController extends Controller
{
    public function dashboard(){
        $votes = Vote::whereNotNull('slot')->get();

        return view('welcome', compact('votes'));
    }

    public function add_vote(Request $request){
        $request->validate([
            'voter_id' => 'required|min:6',
        ]);
        $voter = Voter::where('voter_id', $request->voter_id)->first();
        if($voter === null){
            return back()->with('error_voter', 'Wrong voter id or not available!');
        }else{
            if($voter->vote_left == 0){
                return back()->with('error_voter', 'All vote submited!');
            }else{
                $array_id = explode(',', $voter->vote_id);
                if(in_array($request->vote_id, $array_id)){
                    return back()->with('error_voter', 'Already voted on this slot!');
                }else{
                    // add vote
                    $vote = Vote::where('id', $request->vote_id)->first();
                    if($request->option == 1){
                        $x = $vote->option1vote + 1;
                        $vote->option1vote = $x;
                    }
                    if($request->option == 2){
                        $x = $vote->option2vote + 1;
                        $vote->option2vote = $x;
                    }
                    if($request->option == 3){
                        $x = $vote->option3vote + 1;
                        $vote->option3vote = $x;
                    }
                    if($request->option == 4){
                        $x = $vote->option4vote + 1;
                        $vote->option4vote = $x;
                    }
                    $vote->save();

                    $total_vote = $vote->option1vote + $vote->option2vote + $vote->option3vote + $vote->option4vote;
                    $total_voter = Voter::all();
                    if(count($total_voter) == $total_vote){
                        $vote->complete_status = 1;
                        // unbind vote
                        $slot = Slot::findOrFail($vote->slot);
                        $slot->status = 0;
                        $slot->save();
                        $vote->slot = null;
                        $vote->save();
                    }

                    // Voter update
                    array_push($array_id, $request->vote_id);
                    $voter->vote_id = implode(',', $array_id);
                    $left = $voter->vote_left - 1;
                    $voter->vote_left = $left;
                    $voter->save();

                    return back()->with('success_voter', 'Vote successfully added!');
                }
            }
        }

    }
}
