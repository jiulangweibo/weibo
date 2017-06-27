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
//网站后台路由配置
Route::get('/admin',"Admin\IndexController@index"); //加载后台登录界面
Route::get('/admin/user',"Admin\UserController@index"); 