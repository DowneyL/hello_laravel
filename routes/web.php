<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');

// 基本例子
Route::get('foo', function () {
   return "Hello Laravel";
});

// 响应多个 HTTP 请求
Route::match(['get', 'post'], 'getorpost', function(){
    return "接收 get 请求，也可以接收 post 请求。";
});

// 响应任意请求
Route::any('any', function () {
    return "响应任意请求";
});

// 路由重定向
Route::redirect('/here', '/there', 301);

// 视图路由
//Route::view('/welcome', 'welcome');
// 视图路由传参
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// 路由参数
/*
Route::get('user/{id}', function ($id){
   echo $id;
});
*/

// 定义多个参数
// 路由参数会按顺序依次被注入到路由回调或者控制器中，而不受回调或者控制器的参数名称的影响。
/*
Route::get('post/{post_id}/comment/{comment_id}', function ($pid, $cid){
    echo 'post_id = ' . $pid;
    echo '<br />';
    echo 'comment_id = ' . $cid;
});
*/

// 可选参数
// 可选参数必须是有默认值的小伙子！
/*
Route::get('user/{name?}', function ($name = null){
    var_dump($name);
});
*/

/*
Route::get('user/{name?}', function ($name = 'john'){
    var_dump($name);
});
*/

// 正则表达式约束路由参数
/*
Route::get('user/{id}', function ($id){
    echo 'id = ' . $id;
})->where('id', '[0-9]+');

Route::get('user/{name}', function ($name){
    echo 'name = ' . $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{id}/{name}', function ($id, $name){
    echo 'id = ' . $id;
    echo '<br />';
    echo 'name = ' . $name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
*/

// 在 RouteServiceProvider.php 中定义了全局约束
/*
Route::get('user/{id}', function ($id){
    echo 'id = ' . $id;
})->name('profile');
*/

/*
Route::get('profile/{id}', 'TestController@showProfile');

// 命名空间 + 路由组
Route::namespace('Admin')->group(function () {
   Route::get('/admin', 'AdminsController@index');
});
*/

// 关于路由隐形绑定和路由显示绑定

/*
Route::get('/user/{users}', 'UsersController@index');

Route::get('/profile/{users}', 'ProfilesController@index');
*/

Route::get('/user/{user}', 'UsersController@index');


