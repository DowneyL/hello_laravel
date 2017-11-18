<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NickNamesController extends Controller
{
    //
    public function index()
    {
        return view('nickNames.index');
    }

    public function store(Request $request)
    {
//        dd($request->all());
//        dd($request->input('product.1.name')); // 当提交的数据是一个多维数组的时候，你可以用点链接来获取具体的值。
//        dd($request->input('product.*.name')); // 上一例子中，获取所有的。自由组合。
    }
}
