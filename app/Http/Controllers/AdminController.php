<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
    	$products = App\Product::all();

    	if (auth()->user()->level == 1){
	    	return view('pages.index', compact('products'));
    	}

    }
}
