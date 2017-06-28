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
        
        
         //判断是否是超级用户
        if(session("adminuser")->email=="admin@lamp.com"){
            return $next($request);
        }
        //判断权限
        $nodelist = session("nodelist");
        foreach($nodelist as $v){
            //判断权限
            if($request->is($v['url']) && $request->isMethod($v['method'])){
                return $next($request);
            }
        }
        return back()->with("err","抱歉你没有此操作权限!");
        
        //return $next($request);
    }
}
