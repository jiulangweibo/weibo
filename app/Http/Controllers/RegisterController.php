<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->validate($request, [
            'title' => 'required|max:10',
        ]);

        //获取指定的部分数据
        $data = $request->only('title');
        $id = register::insertGetId($data);
        
        if($id>0){
            return redirect('admin/comments');
        }else{
           return back()->with("err","添加失败!");
        }
    }
}
