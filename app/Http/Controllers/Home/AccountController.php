<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use \App\Model\Userinfo;
use \App\Model\Register;

class AccountController extends Controller
{
    public function index()
	{
   		//

		//return view("home.account.index");
		
		$id =session()->get('homeuser')[0]->id;
		//dd ($id);
		$list = Userinfo::where("user_id",$id)->first();
		//dump($list);
		return view("home.account.index",['list'=>$list]);

    }
	public function edit()
	{
		$v = Userinfo::where("user_id",$id)->first();
        return view("home.account.index",['v'=>$v]);
	}
    public function update(Request $request, $id)
    {
        $input = $request->only('nickname','email','age','sex','sexual','birthday','address','name','QQ');
        //$input = $request->all();
		//return($input);die;
        $m = Userinfo::where("user_id",$id)->update($input);
		//dump($m);
        if($m>0){
            echo "修改成功!";
            return redirect("/account");
        }else{
            echo "修改失败!";
        }
    }
}