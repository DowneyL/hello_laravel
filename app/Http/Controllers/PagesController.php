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
        /* 响应一个文件，不是下载
        return response()
            ->file('../storage/app/public/images/aragaki.jpg');
        */

        /* 下载文件，还真的可以下载喂
        return response()
                ->download('../storage/app/public/images/aragaki.jpg');
        */

        /* 使用 json 函数，响应会自动将头文件的类型修改为 application/json
        return response()->json([
            'name' => 'liheng',
            'job' => 'PHP Programer',
            'age' => '22',
        ]);
        */

        /*
        return response()
            ->view('welcome', [1, 2]) // 这是返回这个视图，不是跳转。而且设置为 404 响应
            ->header('Content-Type', 'application/json'); // 厉害了。
        */

//        return redirect('photos')->with('status', 'Some messages from "PagesControlle".'); // 重定向，并使用闪存的 Session 数据，这个只保存一次刷新就没有了。

        /* 带参数重定向到路由控制器行为
        return redirect()->action(
            'PhotosController@show', ['od' => 3]
        );
        */

//        return redirect()->action('PhotosController@index'); // 重定向到路由控制器行为
//        return 'This is a test function.';
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
