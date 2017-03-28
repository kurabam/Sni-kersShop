<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function postIndex(Requests\ProductRequest $r)
    {
		if($_FILES['picture1']['tmp_name'] != null){
			//dd($_FILES);
		$f = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'], '/media/photos/');
    
		if ($f){
		$r['picture'] =$f;	
		}
		else{
			$r['picture'] ='-';
		}
        $r['picture'] =$f;
        $r['picture_small'] = 's_'.$f;	
		}else{
			$r['picture'] ='';
			$r['picture_small'] ='';
		}
        $r['user_id'] = Auth::user()->id;    
        Product::create($r->all());
        return redirect('home');
    }
	public function getIndex()
{
	$all = Product::where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->paginate();
	return view('home')->with('all',$all);
}

public function getEdit($id)
{
	$one = Product::where('id', $id)->where('user_id', Auth::user()->id)->first();
	return view('edit')->with('one',$one);
}

public function postEdit(Requests\ProductRequest $r,$id)
{
	 $f = \App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'], '/media/photos/');
        $r['user_id'] = Auth::user()->id;
		if ($f){
		$r['picture'] =$f;	
		}
		else{
			$r['picture'] ='-';
		}
        $r['picture'] =$f;
        $r['picture_small'] = 's_'.$f;
	Product::updateOrCreate(['user_id'=>Auth::user()->id, 'id'=>$id],$r->all());
	return redirect('/catalog');
}

public function getDelete($id)
{
	Product::where('user_id',Auth::user()->id)->where('id',$id)->delete();
	return redirect('/catalog');
}

}