<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;
class StaticController extends Controller
{
    public function getIndex($id=null){
		//dd($text);
		$text = Maintext::where('url',$id)->first();
		return view ('static') -> with ('text', $text);
	}
}

