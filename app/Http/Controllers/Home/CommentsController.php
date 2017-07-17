<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Model\Comments;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.comments.index');
    }

	public function del($id)
	{
		 $m = Comments::where("comments_id",$id)->delete();
		 if($m>0){
			  return redirect('/indexs');
		 }else{
			 return "删除失败";
		 }
	}
}
