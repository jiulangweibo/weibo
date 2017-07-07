<?php

namespace App\Http\Controllers\Home;
use  App\Model\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexsController extends Controller
{
    public function index()
	{
   		//
		$list=Message::all();
		return view("home.indexs.index",["list"=>$list]);
    }
    
}