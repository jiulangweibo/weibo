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
		$list=Message::orderBy('publish_time', 'desc')->get();
		
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
        $id = Message::insertGetId($data);
        
		
		 $path = [];
		//判断文件是否上传
        if($request->hasFile('picname')){
			//获取文件
            $file = $request->file('picname');
			//初始化
            $disk = \Storage::disk('qiniu');
			//生成文件名
            $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
			//开始上传
            $bool = $disk->put($fileName,file_get_contents($file->getRealPath()));
            //判断是否成功
			if($bool){
                $path['picname']= (env('DEFAULT').'/'."$fileName");
				
				//返回地址
			   
			   $admin_id = Message::where("message_id",$id)->update($path);
               //return "图片地址为:".$path;
			   if($admin_id && $id){
				  return redirect('/indexs');
			   }
			
            }
            return '上传失败';
        }
        return '没有文件';
		
    }

}