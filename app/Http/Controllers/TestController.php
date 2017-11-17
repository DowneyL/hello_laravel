<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $environment = App::environment();
        $timezone = config('app.timezone');
        dd($environment);
        //return view('tests.index');
    }

    public function showProfile($id)
    {
        $url = route('profile', ['id' => $id]);
        return redirect()->route('profile', ['id' => $id]);
    }
}
