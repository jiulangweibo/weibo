<?php

namespace App\Http\Controllers\Home;
use App\Model\Userinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
      public function index(Request $request)
	{
		
				 $where = [];
        if ($request->only('nickname')) {
           $nickname = $request->input("nickname");   
           $where['nickname']=$nickname;
        }
        
        $bbb =Userinfo::where("nickname","like",'%'.$nickname.'%')->paginate(4);

		return view('home.search.index',['bbb'=>$bbb]);
	}
}
