<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Vote;

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
        $votes = Vote::all();
        return view('admin.vote.see_votes', compact('votes'));
    }

    public function view_vote($id){
        $vote = Vote::findOrFail($id);
        return view('admin.vote.view_vote', compact('vote'));
    }

    public function delete_vote(){
        //
    }
}
