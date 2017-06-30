<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Comments;

class CommentsController extends Controller
{
    public function index()
	{
   		$list = Comments::all();
    	return view("admin.comments.index",["list"=>$list]);
    }
    
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回add界面
		return view("admin.comments.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request, [
            'title' => 'required|max:10',
        ]);

        //获取指定的部分数据
        $data = $request->only('title');
        $id = comments::insertGetId($data);
        
        if($id>0){
            return redirect('admin/comments');
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
    public function show($message_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($message_id)
    {
		$v = Comments::where("message_id","=",$message_id)->first();
        return view("admin.comments.edit",['v'=>$v]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	 
	 /*
    public function update(Request $request, $id)
    {
        //$input = $request->only(['status']);
        $m = Comments::where("comments_id",$id)->update($input);
        if($m){
            echo "修改用户状态成功!";
            return redirect("admin/comments");
        }else{
            echo "修改用户状态失败!";
        }
    }
	*/
	 public function update(Request $request,$message_id)
    {
        
        //获取要修改的数据
        $data = $request->only('user_id','comments_content','comments_time');
        //执行修改
        $sid = Comments::where("message_id",$message_id)->update($data);
        //判断
        if($sid>0){
            $info = "评论修改成功！";
        }else{
            $info = "修改失败！";
        }
        
        //return view("admin.stu.info",['info'=>$info]);
        return redirect("admin/comments")->with("err",$info);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comments_id)
    {
		Comments::where("comments_id",$comments_id)->delete();


        return redirect('admin/comments');
    }
}
