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
/* //网站后台路由配置
Route::get('/admin',"Admin\IndexController@index"); //加载后台登录界面
Route::get('/admin/user',"Admin\UserController@index"); //加载用户管理
Route::get('/admin/register',"Admin\follw@index"); //加载注册表
Route::get('/admin/follw',"Admin\FollwController@index"); //粉丝表
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index");
Route::get('/admin/',"Admin\UserController@index"); */


Route::group(['prefix' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index"); //后台首页


    Route::resource('user', 'Admin\UserController'); //用户详情信息表
    Route::resource('register', 'Admin\RegisterController'); //加载注册表
    Route::resource('follw', 'Admin\FollwController'); //粉丝表
    Route::resource('message', 'Admin\MessageController'); //微博内容表
    Route::resource('forward', 'Admin\ForwardController'); //转发微博表
    Route::resource('comments', 'Admin\CommentsController'); //评论表
	Route::resource('content', 'Admin\ContentController'); //内容状态表
	Route::resource('url', 'Admin\UrlController'); //友情链接
	Route::resource('admin', 'Admin\AdminController'); //管理员信息
	Route::resource('privileges', 'Admin\PrivilegesController'); //管理员权限
	

 
});