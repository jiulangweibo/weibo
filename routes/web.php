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
    return view('home.index.index');
});



//网站后台路由配置
Route::get('/admin/login',"Admin\LoginController@login"); //加载后台登录界面
Route::post('/admin/dologin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/logout',"Admin\LoginController@logout"); //执行退出


Route::group(['prefix' => 'admin','middleware'=>'admin'], function () {
    Route::get('/',"Admin\IndexController@index"); //后台首页
    Route::resource('userinfo', 'Admin\UserinfoController'); //用户详情信息表
    //Route::get('/userinfo/{id}','Admin\UserinfoController@show');
    Route::resource('register', 'Admin\RegisterController'); //加载注册表
    Route::resource('follow', 'Admin\FollowController'); //粉丝表
    Route::resource('message', 'Admin\MessageController'); //微博内容表
    Route::resource('forward', 'Admin\ForwardController'); //转发微博表
    Route::resource('comments', 'Admin\CommentsController'); //评论表
    Route::resource('department', 'Admin\DepartmentController'); //部门表
	Route::resource('content', 'Admin\ContentController'); //内容状态表
	Route::resource('url', 'Admin\UrlController'); //友情链接
	Route::resource('admin', 'Admin\AdminController'); //管理员信息
	Route::resource('privileges', 'Admin\PrivilegesController'); //管理员权限
	

 
});
//Route::group(['prefix' => 'home','middleware'=>'home'], function () {
  //  Route::get('/',"Home\RegisterController@index"); //前台定义前缀


    //Route::resource('userinfo', 'Admin\UserinfoController'); //用户详情信息表
    //Route::resource('register', 'Home\RegisterController'); //加载注册表
    //Route::resource('follow', 'Admin\FollowController'); //粉丝表
    //Route::resource('message', 'Admin\MessageController'); //微博内容表
    //Route::resource('forward', 'Admin\ForwardController'); //转发微博表
    //Route::resource('comments', 'Admin\CommentsController'); //评论表
    //Route::resource('department', 'Admin\DepartmentController'); //评论表
	//Route::resource('content', 'Admin\ContentController'); //内容状态表
	//Route::resource('url', 'Admin\UrlController'); //友情链接
	//Route::resource('admin', 'Admin\AdminController'); //管理员信息
	//Route::resource('privileges', 'Admin\PrivilegesController'); //管理员权限
	//Route::resource('/register', 'RegisterController'); //注册表
	

 
//});
Route::post('/dologin',"Home\LoginController@doLogin"); 	  //执行登录
Route::get('/login',"Home\LoginController@login");            //执行加载登录
Route::get('/register', 'RegisterController@index');          //加载注册页
Route::post('/register/add', 'RegisterController@store');	  //加载注册方法
Route::get('/personal',"Home\personalController@index");      //加载个人主页
Route::get('/logout',"Home\LoginController@logout");		  //执行登录退出
Route::get('/indexs',"Home\IndexsController@index");		  //执行加载登录后首页
Route::get('/setting',"Home\SettingController@index");		  //执行加载设置视图
Route::get('/account',"Home\AccountController@index");		  //执行加载账号设置视图
Route::get('/password',"Home\PasswordController@index");	  //执行加载修改密码视图
Route::get('/avatar',"Home\AvatarController@index");		  //执行加载修改头像视图


