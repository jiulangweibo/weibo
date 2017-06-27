<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Privileges;

class PrivilegesController extends Controller
{
    public function index()
	{
   		$list =Privileges::all();
    	return $list;
    }
}
