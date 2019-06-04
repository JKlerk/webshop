<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    public function index() {

    	$products = App\Product::all();

    	if (auth()->user()->level == 1){
	    	return view('admin.index', compact('products'));
    	} else{
    		return redirect()->action('PageController@index');
    	}

    }
}
