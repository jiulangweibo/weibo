<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Admin;

class AdminController extends Controller
{
    public function index()
	{
   		$list =Admin::all();
    	return view('admin.admin.index',["list"=>$list]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //表单验证
        $this->validate($request, [
            'admin_name' => 'required|max:16',
            'admin_password' => 'required|max:16|min:6',
            'admin_phone' => 'required|integer',
        ]);
        //判断重复密码
        if($request->input("admin_password")!=$request->input("repassword")){
            return back()->with("err","密码和重复密码不一致!");
            //return "密码和重复密码不一致";
        }  
        
        //获取指定的部分数据
        $data = $request->only("admin_name","admin_password","admin_phone");
        $data['admin_password'] = md5($data['admin_password']);
        $admin_id = Admin::insertGetId($data);
        
         if($admin_id>0){
            //echo "添加成功";
            return redirect('admin/admin');
        }else{
           return back()->with("err","添加失败!");
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($admin_id)
    {
        //
        $vo = Admin::where("admin_id","=",$admin_id)->first();
        return view("admin.admin.edit",['vo'=>$vo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $admin_id)
    {
        //
        $input = $request->only("admin_name","admin_phone");
        $m = Admin::where("admin_id",$admin_id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/admin");
        }else{
            echo "修改用户状态失败!";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
