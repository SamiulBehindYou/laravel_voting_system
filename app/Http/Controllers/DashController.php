<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class DashController extends Controller
{
    public function dashboard(){
        $votes = Vote::whereNotNull('slot')->get();

        return view('welcome', compact('votes'));
    }

    public function add_vote(Request $request){
        $request->validate([
            'voter_id' => 'required',
        ]);
        

    }
}
