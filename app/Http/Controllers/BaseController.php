<?php

namespace App\Http\Controllers;
use App\Maintext;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class BaseController extends Controller
{
	public function getIndex(){
		//dd('OK');
		$all= Product::paginate(10);
		return view('index')->with('all',$all);
	}
	public function getStatic($id){
		return view ('static')->with('id',$id);
	}
}


