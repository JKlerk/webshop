<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Modules\ShoppingCart;

class OrderController extends Controller
{
    public function index(Request $request)
    {
    	$cart = ShoppingCart::getItems();

    	$price = 0;

    	foreach ($cart as $item) {
    		$price += $item[0]['price'] * $item[0]['quantity'];
    	}

    	$order = new App\Order;

    	$order->user_id = auth()->user()->id;
    	$order->amount = $price * 100;
    	$order->status = 'paid';

    	$order->save();

		foreach ($cart as $item) {
            $product = App\Product::find($item[0]['id'])->id;
            $order->products()->attach($product);
        }

        ShoppingCart::clearCart();
        
        return redirect(url('/'));
    }
}
