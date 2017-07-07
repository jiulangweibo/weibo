<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use \App\Model\Register;

class LoginController extends Controller
{
	public function login(Request $request)
	{
		if(!$request->session()->has('homeuser')){
            return view("home.login.index");
            return redirect('/login');
        }
		$request->session()->forget('homeuser');
		return view("home.login.index");
        return redirect('/login');
	}
   //执行用户登录
	public function doLogin(Request $request)
   {
      $this->validate($request, [
            'phone' => 'required|max:11',
            'password' => 'required|max:20|min:6',
        ]);

        $home_phone = $request->input("phone");
        $home_password = $request->input("password");

        $user = Register::where("phone",$home_phone)->first();
        if(!empty($user)){
            //判断密码
            if(md5($home_password)==$user->password){
                //存储session跳转页面
                $request->session()->forget('homeuser');
                session()->push("homeuser",$user);
                return redirect("/indexs");
            }
        }
        //return 1;
        return back()->with("msg","账号或密码错误！");
   }
 
   
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('homeuser');
       return redirect("/");
   }
}
