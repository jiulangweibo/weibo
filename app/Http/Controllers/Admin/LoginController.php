<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
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
              //dd($user);
                //获取当前登陆者的权限
                $res = \DB::select('select p.title,p.method,p.url from admin_department ad,department_privileges dp, privileges p where ad.did=dp.did and dp.pid=p.id and ad.admin_id=:admin_id',['admin_id' => $user->admin_id]);
               $nodelist = array(
                  array("title"=>"网站首页","method"=>"get","url"=>"admin"),
                  array("title"=>"查看用户信息","method"=>"get","url"=>"admin/userinfo"),
                  array("title"=>"查看注册信息","method"=>"get","url"=>"admin/register"),
                  array("title"=>"编辑会员状态","method"=>"get","url"=>"admin/userinfo/*/edit"),
                  array("title"=>"角色分配节点","method"=>"get","url"=>"admin/admin/loadNode/*"),
                  array("title"=>"查看微博内容信息","method"=>"get","url"=>"admin/message"),
                  //array("title"=>"删除角色","method"=>"get","url"=>"javascript:doDel(*)"),
                  array("title"=>"编辑角色","method"=>"get","url"=>"admin/department/*/edit"),
                  array("title"=>"查看友情链接","method"=>"get","url"=>"admin/url"),
                  array("title"=>"查看管理员信息","method"=>"get","url"=>"admin/admin"),
                  array("title"=>"查看节点信息","method"=>"get","url"=>"admin/privileges"),
                  array("title"=>"查看角色信息","method"=>"get","url"=>"admin/department"),
                  array("title"=>"增加角色","method"=>"get","url"=>"admin/department/create"),
                  //array("title"=>"删除节点","method"=>"get","url"=>"javascript:doDel(*)"),
                  array("title"=>"编辑节点","method"=>"get","url"=>"admin/privileges/*/edit"),
                  array("title"=>"添加节点","method"=>"get","url"=>"admin/privileges/create"),
                  array("title"=>"管理员分配角色","method"=>"get","url"=>"admin/loadRole/*"),
                  //array("title"=>"删除管理员","method"=>"get","url"=>"javascript:doDel(*)"),
                  array("title"=>"编辑管理员","method"=>"get","url"=>"admin/*/edit"),
                  array("title"=>"增加管理员","method"=>"get","url"=>"admin/create"),
                  //array("title"=>"删除友情链接","method"=>"get","url"=>"javascript:doDel(*)"),
                  array("title"=>"编辑用户","method"=>"get","url"=>"admin/userinfo/*/edit"),
                  array("title"=>"查看用户详情","method"=>"get","url"=>"admin/userinfo/*"),
                  array("title"=>"编辑微博状态","method"=>"get","url"=>"admin/message/*/edit"),
                  array("title"=>"增加友情链接","method"=>"get","url"=>"admin/url/create"),
                  array("title"=>"编辑友情链接","method"=>"get","url"=>"admin/url/*/edit"),
                );
                foreach($res as $ob){
                    $nodelist[] = [
                           "title"=>$ob->title,
                           "method"=>$ob->method,
                           "url"=>$ob->url
                        ];

                    //判断当前是否有添加权限,若有就追加执行添加
                    if(preg_match("/^.*?\/create$/",$ob->url) && $ob->method=="get"){
                        $nodelist[] =[
                           "title"=>"执行添加",
                           "method"=>"post",
                           "url"=>preg_replace("/^(.*?)\/create$/","\\1",$ob->url)
                        ];
                    }
                    //dd($nodelist);
                    //判断当前是否有修改权限,若有就追加执行修改
                    if(preg_match("/^.*?\/\*\/edit$/",$ob->url) && $ob->method=="get"){
                        $nodelist[] =[
                           "title"=>"执行修改",
                           "method"=>"put",
                           "url"=>preg_replace("/^(.*?)\/\*\/edit$/","\\1/*",$ob->url)
                        ];
                    }
                }
                //将获取的权限放入到session中
                session()->push("nodelist",$nodelist);
                //dd($nodelist);
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
