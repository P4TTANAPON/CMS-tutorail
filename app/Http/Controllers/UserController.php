<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        return view('users.index')->with('users',User::all());
    }

    public function makeAdmin(User $user) {
        $user->role = 'admin';
        $user->save();
        Session()->flash('success','Change status Complete.');
        return redirect(route('users.index'));
    }
}
