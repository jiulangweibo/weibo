<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
   //加载登录模板
   public function login()
   {
       return view("admin.login");
   }
   
   //执行用户登录
	public function doLogin(Request $request)
   {


        
        //执行登陆判断
        $admin_name = $request->input("admin_name");
        $admin_password = $request->input("admin_password");
        //获取对应用户信息
        $user = \DB::table("admin")->where("admin_name",$admin_name)->first();
        if(!empty($user)){
            //判断密码
            if(md5($admin_password)==$user->admin_password){
                //存储session跳转页面
                session()->push("adminuser",$user);

                //获取当前登陆者的权限
                // $res = \DB::select('select n.title,n.method,n.url  from admin_department ur,department_privileges rn,privileges n where ur.did=rn.did and rn.pid=n.id and ur.admin_id=:id', ['id' => $user->id]);
                // $nodelist = array(array("name"=>"网站首页","method"=>"get","url"=>"admin"));
                // foreach($res as $ob){
                //     $nodelist[] = [
                //            "title"=>$ob->name,
                //            "method"=>$ob->method,
                //            "url"=>$ob->url
                //         ];
                //     //判断当前是否有添加权限,若有就追加执行添加
                //     if(preg_match("/^.*?\/create$/",$ob->url) && $ob->method=="get"){
                //         $nodelist[] =[
                //            "title"=>"执行添加",
                //            "method"=>"post",
                //            "url"=>preg_replace("/^(.*?)\/create$/","\\1",$ob->url)
                //         ];
                //     }
                //     //判断当前是否有修改权限,若有就追加执行修改
                //     if(preg_match("/^.*?\/\*\/edit$/",$ob->url) && $ob->method=="get"){
                //         $nodelist[] =[
                //            "title"=>"执行修改",
                //            "method"=>"put",
                //            "url"=>preg_replace("/^(.*?)\/\*\/edit$/","\\1/*",$ob->url)
                //         ];
                //     }
                // }
                // //将获取的权限放入到session中
                // session()->set("nodelist",$nodelist);

                return redirect("admin");
                //echo "测试成功!";
            }
        }
        return back()->with("msg","账号或密码错误！");
   }
 
   
   //执行退出
   public function logout(Request $request)
   {
       $request->session()->forget('adminuser');
       return redirect("admin/login");
   }
}
