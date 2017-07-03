<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Register;

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
        return view('home.register.register');
    }
	

	
	   public function store(Request $request)
    {
        //表单验证
      

        //获取指定的部分数据
        $data = $request->only('email','password');
		$data['password'] = md5($data['password']);
        $id = Register::insertGetId($data);
        
        if($id>0){

            return redirect('/');
        }else{
           return back()->with("err","添加失败!");
        }
    }
}
