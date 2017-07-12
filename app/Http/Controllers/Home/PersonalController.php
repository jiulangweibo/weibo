<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message;
use App\Model\Userinfo;
use App\Model\Follow;

class personalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        //
		$user_id = session()->get('homeuser')[0]->id;
		 $datas = Follow::where('id',$user_id)->orderBy('follow_count','desc')->first();
		 //dd($datas);
		  $dataf = Follow::where('id',$user_id)->orderBy('fans_count','desc')->first();
		 $datam = count(Message::where('user_id',$user_id)->get());
		 
		 
        $id = session()->get("homeuser")[0]->id;
        //dd ($id);
        $list= Userinfo::where("user_id",$id)->first();
		
		$add= Message::where("user_id",$id)->orderBy('publish_time', 'desc')->paginate(4);
		
		foreach($add as $k=>$v){
			$add[$k]->nickname = $list->nickname;
		}
		
		//echo"<pre>";
		//var_dump($add);die;
        //dump($info);
		return view("home.personal.index",["add" => $add,"list"=>$list,'datas'=>$datas,'dataf'=>$dataf,'datam'=>$datam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
