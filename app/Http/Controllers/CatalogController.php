<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Catalog;
use App\Product;

class CatalogController extends Controller
{
  public function getAll(){
	  $all=Catalog::where('showhide','show')->get();
     return view('catalog')->with('all',$all);	  	  
  }
  public function getCategory($id=0){
	  $all=Product::where('category_id',$id)->paginate(0);
	  $cat=Catalog::find($id);
	  return view('products')->with('all',$all)->with('cat',$cat);

  }

}
