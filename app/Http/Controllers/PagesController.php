<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('welcome');
    }

    public function test()
    {
        return 'This is a test function.';
    }

    public function avatarApi(Photo $photo)
    {
        $photos = $photo->all();
        return response($photos)
            ->header('X-Header-One', 'Header Value')
            ->header('X-Header-Two', 'Header Value')
            ->cookie('avatar_api', 'value', 3600, '/avatar_api');
    }

    public function redirectUrl(Photo $photo)
    {
        $pho = $photo->find('4');
//        return redirect('/'); // 这里重定向到对应的路由上
//        return redirect()->route('photos.create'); // 重定向到命名路由
//        return redirect()->route('photos.show', ['photo' => 3]); // 重定向到命名路由，参数是路由要传递的参数。
        return redirect()->route('photos.show', [$pho]); // 直接传递 Eloquent 模型也可以，他会直接通过 Eloquent 模型填充参数。
    }
}
