<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return back()->withInput(); // 必须要将数据带回去，才能取到

        $result = Photo::create($request->all());
        if ($request) {
            echo "Success";
        } else {
            echo "Error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
        return view('photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
//        dd($photo->toArray());
//        dd($request->path()); // 返回请求的路径信息
//        dd($request->is('photos/*')); // 验证请求的路径是否和指定规则匹配
//        dd($request->url()); // 获取不带参数的请求 url，get 请求
//        dd($request->fullUrl()); // 获取带参数的请求 url，get 请求
//        dd($request->isMethod('patch')); // 获取请求的方法，注意这里不仅仅只有 post 和 get，还有 put、patch、delete
//        dd($request->all()); // 你将以数组的形式，获取输入的内容。
//        dd($request->input('name')); // 获取具体的用户输入内容
//        dd($request->input('length', 'sally')); // 第二个参数作为默认值，当 request 请求中，不含有指定用户输入内容时，返回该默认值
//        dd($request->query('name'));

        // 通过动态属性获取输入
//        dd($request->name);

//        dd($request->only('name', 'size')); // 只获取传过来的 name 值，动态列表形式传参
//        dd($request->only(['name', 'size'])); // 数组形式传参

//        dd($request->except('name')); // 获取其他数据，除了 name 值，动态列表形式传参
//        dd($request->except(['name'])); // 数组形式传参

//        dd($request->only(['name','size','length'])); // length 不存在，但是 only 函数既不报错也不返回。

        // 确定是否存在输入值
//        dd($request->has('name'));
//        dd($request->has(['name', 'size']));
//        dd($request->has('length'));
//        dd($request->has(['name', 'length']));
        dd($request->cookie());
        $result = $photo->update($request->all());
        if ($result) {
            return view('photos.show', compact('photo'));
        } else {
            echo 'Error';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $result = $photo->delete();
        dd($result);
    }

    public function test()
    {
        return 11111;
    }
}
