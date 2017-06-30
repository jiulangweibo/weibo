<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Department;

class DepartmentController extends Controller
{
     public function index()
	{
   		$list =Department::all();
    	return view('admin.department.index',["list"=>$list]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view ("admin.department.add");
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
		$data = $request->only("title",'privileges_id');
		//return $data;
		$id = Department::insertGetId($data);
		
		if($id>0){
            return redirect('admin/department');
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
    public function edit($id)
    {
        $v = Department::where("id","=",$id)->first();
        return view("admin.department.edit",['v'=>$v]);
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
        $input = $request->only(['title','privileges_id']);
        $m = Department::where("id",$id)->update($input);
        if($m){
            echo "修改权限名称成功!";
            return redirect("admin/department");
        }else{
            echo "修改权限名称失败!";
            return redirect("admin/department");
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
		Department::where("id",$id)->delete();

        return redirect('admin/department');
    }
}
