<?php

namespace App\Http\Controllers\Home;
use App\Model\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index()
	{
   		//
		$list=Message::all();
		return view("home.indexs.index",["list"=>$list]);
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