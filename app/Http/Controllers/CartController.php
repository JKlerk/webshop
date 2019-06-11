<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class CartController extends Controller
{
    
    public function index() {
    	$products = App\Product::all();
    	return view('pages.shoppingcart', compact('products'));

    	$data = Session::all();
    }

    public function addCart(){
    	
    }

    public function removeCart(){

    }

}
