<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class OrderController extends Controller
{
	/**
	 * Gets all items from shopping cart then creates an order
	 *
	 * @param Request $request
	 * @return void
	 */
    public function index(Request $request)
    {
    	$cart = ShoppingCart::getItems();

    	$price = 0;

    	foreach ($cart as $item) {
    		$price += $item['price'] * $item['quantity'];
    	}

    	$order = new App\Order;

    	$order->user_id = auth()->user()->id;
    	$order->amount = $price * 100;
    	$order->status = 'paid';

    	$order->save();

		foreach ($cart as $item) {
            $product = App\Product::find($item['id'])->id;
            $order->products()->attach($product);
        }

        ShoppingCart::clearCart();
        
        return redirect(url('/'));
    }
}
