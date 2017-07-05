<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Register;
use \App\Model\Userinfo;
use Illuminate\Database\Seeder\UsersTableSeeder;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 //定义方法显示
    public function index()
    {	//返回视图
        return view('home.register.index');
    }
	

	
	   public function store(Request $request)
    {
        //表单验证
      

        //获取指定的部分数据
        $data = $request->only('phone','password','nickname');
		$data['password'] = md5($data['password']);
        $data['register_time'] = date("Y-m-d H:i:s",time());
        $id = Register::insertGetId($data);
        $data['status'] = 0;
        
        $userinfo = Userinfo::insertGetId($data);
        
        if($id>0){
            return redirect('/');
        }else{
           return back()->with("err","添加失败!");
        }
    }
}
