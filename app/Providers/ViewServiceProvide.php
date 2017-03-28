<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Catalog;



class ViewServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
 //       $cats = Catalog::where('showhide', 'show')->get();
	//	$view ->with ('cats',$cats);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
