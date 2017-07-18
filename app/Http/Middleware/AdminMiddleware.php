<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断会员是否没有登录
        if(!$request->session()->has('adminuser')){
            return redirect('admin/login');
        }
        //return $next($request);//继续往后走
        //dd(session("adminuser"));
       //  判断是否是超级用户

        // if(session("adminuser")->admin_id==1){
        //     return $next($request);
        // }
      //  判断权限   
       //dd(session("nodelist"));
        $nodelist = session("nodelist");
        //dd($nodelist);//dd($nodelist);

        foreach($nodelist as $k=>$v){
            //判断权限
            //dd($request);
            foreach ($v as $key => $value) {
              if($request->is($value['url']) && $request->isMethod($value['method'])){
                    return $next($request);
                }
            }
                
        }
        return back()->with("err","抱歉你没有此操作权限!");


        
    }

}
