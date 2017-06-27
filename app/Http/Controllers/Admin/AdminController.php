<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Admin;

class AdminController extends Controller
{
    public function index()
	{
   		$list =Admin::all();
    	return $list;
    }
}
