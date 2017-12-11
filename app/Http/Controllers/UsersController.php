<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /*
    public function show(User $user)
    {
        dd($user->toArray());
        //return view('test', compact('user'));
    }
    */
    public function index(User $user)
    {
        dd($user->toArray());
    }

    public function show($id)
    {
        return view('users.profile', ['user' => User::findOrFail($id)]);
    }
}
