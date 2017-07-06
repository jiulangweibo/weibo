<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Register;
use \App\Model\Userinfo;

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

            $phone = $request->input("phone");
            $password = $request->input("password");
            $user = Register::where("phone",$phone)->first();
            //dd($user);
            //dd($phone);
            //dd($user -> phone);
                if(empty($user)){
        			$data = $request->only('phone','password','nickname');
        			$data['password'] = md5($data['password']);
        			$data['register_time'] = date("Y-m-d H:i:s",time());
        			
        			$id = Register::insertGetId($data);
        			//return($id);
        			//同时添加数据到userinfo表中 并且 userinfo表中的user_id = register中的主键id;
        			$data['user_id']=$id;
        			//return($data);
        			$dd = Userinfo::insertGetId($data);
        			
        			if($dd>0 && $id>0){
        				return redirect('/');
        			}else{
        			   return back()->with("err","注册失败,请重新注册！");
        			}
    		    }
    		    return back()->with("err","手机号或昵称重复！");
            
	       
    }
}
