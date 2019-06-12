<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Session;

class CartController extends Controller
{
    
    public function index() {

	    $items = Session::get('cart.items');

        // dd($items);
	    return view('pages.shoppingcart', compact('items'));

    }

	public function addCart($id)
    {
        $product = App\Product::find($id);

    	$cart = [
            'id' => $product->id,
            'title' => $product->title,
            'quantity' => 1,
            'shortdesc' => $product->shortdesc,
            'price' => $product->price
    	];

    	Session::push('cart.items', $cart);

    	return redirect()->action('CartController@index');
    }

    public function removeCart($id){

    	Session::forget('cart.items');

    	return redirect()->action('CartController@index');
    }

    public function updateCart($id){
        //
    }

}
