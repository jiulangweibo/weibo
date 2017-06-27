<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Follow;

class FollowController extends Controller
{
    public function index()
	{
   		$list =Follow::all();
    	return $lis;
    }
}
