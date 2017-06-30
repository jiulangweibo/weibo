<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Url;

class UrlController extends Controller
{
    public function index()
	{
   		$list =Url::all();
    	return view('admin.url.index',["list"=>$list]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		  return view("admin.url.create");
		
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
		 //获取要添加的数据
        $data = $request->only('url');
        //执行添加
        $id = \DB::table("url")->insertGetId($data);
        //判断
        if($id>0){
            $info = "信息添加成功！";
        }else{
            $info = "信息添加失败！";
        }
        
        //return view("admin.stu.info",['info'=>$info]);
        return redirect("admin/url")->with("err",$info);
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
    public function edit($id)
    {
        //
		 $v = Url::where("id","=",$id)->first();
        return view("admin.url.edit",['v'=>$v]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		 $input = $request->only("url");
        $m = Url::where("id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/url");
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
       
    }
}