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
        
        
      
    }
}
