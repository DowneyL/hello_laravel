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

        // 新增了上传文件的 input 框以后
//        dd($request->all()); // 可以打印出所有请求数据，包括上传文件的具体信息
//        dd($request->file('avatar_photo')); // 只打印上传文件的信息
//        dd($request->avatar_photo); // 同上一个方法
//        dd($request->hasFile('avatar_photo')); // 判断请求中是否存在对应文件
//        dd($request->file('avatar_photo')->isValid()); //注意，如果名为 avatar_photo 的文件不存在，判断有效性是会报错的。所以修改为如下代码
//        return $request->hasFile('avatar_photo') ? $request->file('avatar_photo')->isValid() : '你还没有上传文件呐！！';
//        dd($request->avatar_photo->path()); // 访问文件路径
//        dd($request->avatar_photo->extension()); // extension 方法会根据文件内容判断文件的扩展名。该扩展名可能会和客户端提供的扩展名不同

        /**
         *  1. 上传的时候，若对应的文件夹不存在，Laravel 不会报错，而是直接在 storage/app 下创造对应文件夹。
         *  2. store 方法返回文件上传的路径，下面第二个例子中，返回 "public/images/aragaki.jpg"
         *  3. 在使用方法前，先判断上传的文件是否真的存在
         */

//        dd($request->avatar_photo->store('public/images')); // 文件会存储到 storage/app/images 下
        dd($request->avatar_photo->storeAs('public/images', 'aragaki.jpg')); // 同上，并且会将上传文件夹，重命名为 aragaki.jpg

    }


}
