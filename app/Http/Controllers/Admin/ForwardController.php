<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Forward;
class ForwardController extends Controller
{
    public function index()
	{
   		$list =Forward::all();
    	return $list;
    }
}
