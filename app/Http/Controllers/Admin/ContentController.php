<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Content;

class ContentController extends Controller
{
    public function index()
	{
   		$list =Content::all();
    	return $list;
    }
}
