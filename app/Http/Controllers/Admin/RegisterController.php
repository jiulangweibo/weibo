<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Register;

class RegisterController extends Controller
{
  public function index()
	{
   		$info = Register::all();
    	return view("admin.register.index",["info"=>$info]);
    }


   
}
