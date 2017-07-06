<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AvatarController extends Controller
{
    public function index()
	{
   		//
		return view("home.avatar.index");
    }
	
	public function uploadFile(Request $request)
	{
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
                $path = (env('DEFAULT').'/'."$fileName");
				//返回地址
                return '上传成功'.$path;
            }
            return '上传失败';
        }
        return '没有文件';
    }
	
    
}