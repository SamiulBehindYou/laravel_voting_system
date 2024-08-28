<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function change_access($id){
        $user = User::findOrFail($id);
        // print_r($user->status);
        // die();
        if($user->status == 0){
            $user->status = 1;
            $user->save();
        }
        else{
            $user->status = 0;
            $user->save();
        }

        return back()->with('success_change', 'Access changed successfully!');
    }

    public function delete_user($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success_delete', 'User deleted successfully!');
    }
}
