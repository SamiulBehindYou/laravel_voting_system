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

    public function delete_user($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success_delete', 'User deleted successfully!');
    }
}
