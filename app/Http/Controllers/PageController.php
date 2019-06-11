<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class PageController extends Controller
{
    public function index() {
    	$products = App\Product::all();
    	return view('pages.index', compact('products'));
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function shoppingcart() {
    	$products = App\Product::all();
    	return view('pages.shoppingcart', compact('products'));
    }
}
