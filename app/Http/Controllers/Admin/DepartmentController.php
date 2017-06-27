<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Model\Department;

class DepartmentController extends Controller
{
     public function index()
	{
   		$list =Department::all();
    	return $list;
    }
}
