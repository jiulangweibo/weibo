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
		$user_id = session()->get('homeuser')[0]->id;
        //
		 //获取指定的部分数据
        $data = $request->only("content");
		$data['publish_time']=date("Y-m-d H:i:s",time());
		$data['user_id']=$user_id;	
        $m = Message::insertGetId($data);
        
         if($m>0){
            //echo "添加成功";
       return redirect('/indexs');
        }else{
           return back()->with("err","添加失败!");
        } 
    }

}