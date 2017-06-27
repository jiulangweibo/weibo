<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Comments;

class CommentsController extends Controller
{
    public function index()
	{
   		$list =Comments::all();
    	return $list;
    }
}
