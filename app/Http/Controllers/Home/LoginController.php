<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
  //加载登录模板
   public function login()
   {
       return view("home.login");
   }
   //执行用户登录
	public function doLogin(Request $request)
   {

        
        //执行登陆判断
        $home_name = $request->input("home_name");
        $home_password = $request->input("home_password");
        //dd($home_password);
        //获取对应用户信息 
        $user = \DB::table("register")->where("nickname",$home_name)->first();
        if(!empty($user)){
            //判断密码
            if(md5($home_password)==$user->password){
                //存储session跳转页面
                session()->push("homeuser",$user);
                //return 1;
                return redirect("/");
                //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
   }
 
   
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('homeuser');
       return redirect("home/login");
   }
}
