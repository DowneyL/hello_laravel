<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(User $user)
    {
        dd($user->toArray());
        return view('test', compact('user'));
    }
}
