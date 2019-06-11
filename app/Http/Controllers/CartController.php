<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class CartController extends Controller
{
    
    public function index() {


    $items = Session::get('cart.items');
    return view('pages.shoppingcart', compact('items'));


	
	// $items = Session::get('cart.items');

 //           // dd($product);
 //        // return view('pages.shoppingcart', compact('items'));
	// return $items;

    }

	public function addCart($id)
    {
        $product = App\Product::find($id);

    	$cart = [
    		$id => [
    			"id" => $product->id,
				"title" => $product->title,
				"price" => $product->price
    		]
    	];
    	Session::push('cart.items', $cart);

    	return redirect()->action('CartController@index');
    }

    public function removeCart(){
    	Session::forget('cart.items');

    	return redirect()->action('CartController@index');
    }

}
