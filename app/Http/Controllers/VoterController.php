<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Vote;
use App\Models\Slot;


class VoterController extends Controller
{
    public function add_voter(Request $request){
        $request->validate([
            'name' => 'required',
            'nid' => 'required|min:10',
        ]);
        $voter = new Voter();
        $voter->name = $request->name;
        $voter->nid = $request->nid;
        $voter->voter_id = rand(000000,999999);;
        $voter->save();

        return back()->with('success_voter', 'Voter added successfully with new voter ID!');
    }

    public function see_voters(){
        $voters = Voter::all();
        return view('admin.vote.see_voter', compact('voters'));
    }

    public function voter_delete($id){
        $voter = Voter::findOrFail($id);
        $voter->delete();
        return back()->with('success_delete', 'Voter deleted successfully!');
    }

    public function create_vote(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
        ]);
        $vote = new Vote();
        $vote->title = $request->title;
        $vote->description = $request->description;
        $vote->option1 = $request->option1;
        $vote->option2 = $request->option2;
        $vote->option3 = $request->option3;
        $vote->option4 = $request->option4;
        $vote->save();

        return back()->with('success_vote', 'Vote added successfully!');
    }

    public function see_votes(){
        $votes = Vote::where('complete_status', 0)->get();
        return view('admin.vote.see_votes', compact('votes'));
    }

    public function view_vote($id){
        $vote = Vote::findOrFail($id);
        $total_vote = $vote->option1vote + $vote->option2vote + $vote->option3vote + $vote->option4vote;
        $voter = Voter::all();
        $total_voter = count($voter);
        $vote_left = $total_voter - $total_vote;
        return view('admin.vote.view_vote', compact('vote', 'total_vote', 'vote_left'));
    }
    public function view_completed_vote($id){
        $vote = Vote::findOrFail($id);
        $total_vote = $vote->option1vote + $vote->option2vote + $vote->option3vote + $vote->option4vote;
        $voter = Voter::all();
        $total_voter = count($voter);
        return view('admin.vote.view_completed_vote', compact('vote', 'total_vote'));
    }

    public function delete_vote($id){
        $vote = Vote::findOrFail($id);
        $vote->delete();
        return back()->with('success_delete', 'Vote deleted successfully!');
    }

    public function slot(){
        $votes = Vote::where('active_status', 0)->where('complete_status', 0)->get();
        $slots = Slot::where('status', 0)->get();
        return view('admin.vote.slot', compact('votes', 'slots'));
    }

    public function bind_slot(Request $request){
        Vote::where('id', $request->vote)->update([
            'slot' => $request->slot
        ]);
        Slot::where('id', $request->slot)->update([
            'status' => 1
        ]);
        return back()->with('success_slot', 'Slot binded successfully!');
    }

    public function unbind_slot($id){
        $vote = Vote::findOrFail($id);
        $slot = Slot::findOrFail($vote->slot);
        $slot->status = 0;
        $slot->save();
        $vote->slot = null;
        $vote->save();
        return back()->with('success_unbind', 'Slot unbinded successfully!');
    }
    public function completed_votes(){
        $votes = Vote::where('complete_status', 1)->get();

        return view('admin.vote.completed_votes', compact('votes'));
    }
}
