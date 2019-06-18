<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\ShoppingCart;
use App;
use Session;

class CartController extends Controller
{
    
    public function index() {

	    $items = ShoppingCart::getItems();

	    return view('pages.shoppingcart', compact('items'));
    }

	public function addCart(Request $request, $id)
    {
        $product = App\Product::find($id);

    	$cart = [ $id = [
                'id' => $product->id,
                'title' => $product->title,
                'quantity' => 1,
                'shortdesc' => $product->shortdesc,
                'price' => $product->price,
                'selectedSize' => $request->size,
                'selectTopping' => $request->topping,
            ]
        ];

    	$result = ShoppingCart::addItem($cart, $product);

        if ($result) {
            return redirect()->action('CartController@index');
        } else {
            session()->flash('error', 'You already have this product in your shopping cart.');

            return redirect()->back();
        }

    }

    public function removeCart($id){

    	ShoppingCart::removeItem($id);

        return redirect()->back();
    }

    public function updateCart(Request $request, $id){
        ShoppingCart::updateItem($id, $request);

        return redirect()->action('CartController@index');
    }

    public function pay()
    {
        $items = ShoppingCart::getItems();
        return view('pages.pay', compact('items'));
    }

}
