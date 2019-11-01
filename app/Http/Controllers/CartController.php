<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends Controller
{
    /**
     * Gets items from sessions then returns view
     *
     * @return void
     */
    public function index()
    {

        $cart = new ShoppingCart;
        $items = $cart->getItems();

        // return json_encode($items);
        return view('pages.shoppingcart', compact('items'));
    }

    /**
     * Adds itmems to cart
     *
     * @param Request $request
     * @param $id
     * @return void
     */
    public function addCart(Request $request, $id)
    {
        $product = App\Product::find($id);


        $request->validate([
            'selectedSize' => 'required',
            'selectedTopping' => 'required'
        ]);

        $cartItem = [
            'id' => $product->id,
            'title' => $product->title,
            'quantity' => 1,
            'shortdesc' => $product->shortdesc,
            'price' => $product->price,
            'selectedSize' => $request->selectedSize,
            'selectedTopping' => $request->selectedTopping,
        ];

        $cart = new ShoppingCart();
        $exists = $cart->newItem($cartItem);

        if ($exists) {
            return redirect()->action('CartController@index');
        } else {
            session()->flash('error', 'You already have this product in your shopping cart.');
            return redirect()->back();
        }
    }


    /**
     * Removes item from cart
     *
     * @param $id
     * @return void
     */
    public function removeCart($id)
    {
        $cart = new ShoppingCart();
        $cart->removeItem($id);

        return redirect()->back();
    }

    /**
     * Updates cart when user selects different quantity
     *
     * @param Request $request
     * @param $id
     * @return void
     */

    public function updateCart(Request $request, $id)
    {
        $cart = new ShoppingCart();
        $cart->updateItem($request, $id);

        return redirect()->action('CartController@index');
    }

    /**
     * Sends user to payment page
     *
     * @return void
     */
    public function pay()
    {
        $cart = new ShoppingCart();
        $items = $cart->getItems();
        return view('pages.pay', compact('items'));
    }
}
