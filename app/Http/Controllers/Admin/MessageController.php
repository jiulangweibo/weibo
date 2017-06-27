<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Message;

class MessageController extends Controller
{
    public function index()
	{
   		$list =Message::all();
    	return $list;
    }
}
