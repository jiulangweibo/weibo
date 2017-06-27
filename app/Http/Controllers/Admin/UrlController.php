<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Url;

class UrlController extends Controller
{
    public function index()
	{
   		$list =Url::all();
    	return $list;
    }
}