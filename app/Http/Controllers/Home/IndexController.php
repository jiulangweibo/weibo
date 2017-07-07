<?php

namespace App\Http\Controllers\Home;
use  App\Model\Userinfo;
use  App\Model\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$list=Userinfo::all();
		$info=Message::all();
		$add = [];
		foreach($info as $k=>$v){
			$aa = $info[$k]->user_id;
			
		//dump($aa);
		//die;
		
		//$id = session()->get("homeuser")[0]->id;
        //dd($id);
			
		//$add= Userinfo::where("user_id",$id)->first();
		$add[] = Userinfo::where("user_id",$aa)->first();
		//dd($list->nickname);
		//$user= Userinfo::where("phone",$phone)->first();
       //mp($add->nickname);
	   //$info[$k]['nickname']=$add->nickname;
		 //dump($add->nickname);die;
		// dump($add->nickname);
		$acc=Message::where("user_id",$aa)->first();
		//echo"<pre>";
		//var_dump($acc->content);die;
		$add[$k]->content=$acc->content;
		$add[$k]->publish_time=$acc->publish_time;
		//$add[$k]['nickname']=$add->o;
		
		
		}
	
		//echo"<pre>";
		//var_dump($add[$k]->content);
		//var_dump($add);
		return view('home.index.index',['list'=>$list,'add'=>$add]);
			

      
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
