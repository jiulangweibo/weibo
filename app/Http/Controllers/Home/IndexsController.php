<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Message;
class IndexsController extends Controller
{
    public function index()
	{
   		//
		return view("home.indexs.index");
    }
     public function store(Request $request)
    {
        //
		 //获取指定的部分数据
        $data = $request->only("content");
        $message_id = Message::insertGetId($data);
        
         if($message_id>0){
            echo "添加成功";
       
        }else{
           return back()->with("err","添加失败!");
        } 
    }

}