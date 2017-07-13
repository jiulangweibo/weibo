<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Redis;
use App\Model\Message;
use App\Model\Follow;
use App\Model\Userinfo;
use App\Model\Forward;
use App\Model\Praise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index(Request $requst)
	{

		//$list = Praise::where('user_id',1)->where('message_id',97)->first();
		//echo"<pre>";
		//var_dump("$list");die;
			//统计个人发布的微博，关注，粉丝
   		 $user_id = session()->get('homeuser')[0]->id;
		 $datas = Follow::where('id',$user_id)->orderBy('follow_count','desc')->first();
		 //dd($datas);
		  $dataf = Follow::where('id',$user_id)->orderBy('fans_count','desc')->first();
		 $datam = count(Message::where('user_id',$user_id)->get());
		
		$id = session()->get("homeuser")[0]->id;
        //dd($id);die;
		$list = Userinfo::where("user_id",$id)->first();
        //dump($list);die;
		$info = Message::orderBy('publish_time','desc')->paginate(8);
        
		 //dump($info);die;
		$message = [];
		$ccc = [];
		$ddd = [];
		//$acc = [];
		foreach($info as $k=>$v){
			$message[$k]['user_id'] = $v['user_id'];
			$message[$k]['content'] = $v['content'];
			$message[$k]['tupian'] = $v['picname'];
			$message[$k]['publish_time'] = $v['publish_time'];
			$message[$k]['message_id'] = $v['message_id'];
			
		
		
		//$id = session()->get("homeuser")[0]->id;		
		
		//$message[] = Userinfo::where("user_id",$aa)->get();
		//$acc=Message::where("user_id",$aa)->first();
		//$message[$k]->content=$acc->content;
		//$message[$k]->publish_time=$acc->publish_time;
		
		}
		foreach($message as $k=>$v){
			
			$ddd[$k]= Userinfo::where('user_id',$v['user_id'])->first();
			$ccc[$k]['nickname']=$ddd[$k]['nickname'];
			$ccc[$k]['picname']=$ddd[$k]['picname'];
			
			$message[$k]['nickname'] = $ccc[$k]['nickname'];
			$message[$k]['touxiang'] = $ccc[$k]['picname'];
	 
		}
		
		return view("home.indexs.index",["list"=>$list,'info'=>$info,'message'=>$message,'datas'=>$datas,'dataf'=>$dataf,'datam'=>$datam]);
    }
	
	
	function store(Request $request)
    {
		$user_id = session()->get('homeuser')[0]->id;
        //
		 //获取指定的部分数据
        $data = $request->only("content");
		$publish_time = time()+480*60;
		$data['publish_time']=date("Y-m-d H:i:s",$publish_time);
		$data['user_id']=$user_id;	
        $id = Message::insertGetId($data);
        
		
		 $path = [];
		//判断文件是否上传
		if($id){
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
				//$path= (env('DEFAULT').'/'."$fileName");
				$path['picname']= $disk->getDriver()->imagePreviewUrl($fileName,'imageView2/2/w/200/h/200/q/75');   
               //echo$a;die;
				
				//返回地址
			   
			   $admin_id = Message::where("message_id",$id)->update($path);
               //return "图片地址为:".$path;
			   if($admin_id && $id){
				  return redirect('/indexs');
			   }
			
            }
            return '上传失败';
        }
       return redirect('/indexs');
		}else{
			 return redirect('/indexs');
		}
		
    }
	
	
	function forward($mid,$sud,$id,$content)
    {
		
		//var_dump($content);die;
		$forward_time = time()+480*60;
		$data['user_id'] = $id;
		$data['message_id'] = $mid;
		$data['su_id'] = $sud;
		$data['forward_time']=date("Y-m-d H:i:s",$forward_time);
		if($content=='null'){
			
		$data['forward_content']='';
		$id = Forward::insertGetId($data);
		}else{
			$data['forward_content']=$content;
			$id = Forward::insertGetId($data);
		}
	
			
			 return redirect('/indexs');
	
		
		
		
	}
	
	function praise($mid,$uid)
	{
		$list = Praise::where('user_id',$uid)->where('message_id',$mid)->first();
		if($list==''){
			$data['message_id'] = $mid;
			$data['user_id'] = $uid;
			$data['praise_count'] = 1;
			$id = Praise::insertGetId($data);
		}else{
			
			$praise_count = $list->praise_count++;
			$data['praise_count'] =$list->praise_count;
			$m = Praise::where('user_id',$uid)->where('message_id',$mid)->update($data);
		}
		
	 
			$info = Message::where('message_id',$mid)->first();
			$praise_count = $info->praise_count++;
			$cccc['praise_count'] =$info->praise_count;
			$m = Message::where('message_id',$mid)->update($cccc);
		
		//return $data;
	}
	
	
	
		function praises($mid,$uid)
	{
			$list = Praise::where('user_id',$uid)->where('message_id',$mid)->first();
			$praise_count = $list->praise_count--;
			$data['praise_count'] =$list->praise_count;
			$m = Praise::where('user_id',$uid)->where('message_id',$mid)->update($data);
			
			
				
			$info = Message::where('message_id',$mid)->first();
			$praise_count = $info->praise_count--;
			$dddd['praise_count'] =$info->praise_count;
			$m = Message::where('message_id',$mid)->update($dddd);
			
		
		
		//return $data;
	}
	
		function dd(Request $request)
		{
			return $request->input('message_id');
			
		}


		function comments($mid,$id,$content)
		{
			$comments = Redis::hmset("comment",["one"=>$mid,"two"=>$id,"three"=>$content]);
			$bianlian = Redis::hgetall("comment");
			//dd($bianlian);
			var_dump($bianlian);
			 
		}
		function content($content)
		{

		}

}