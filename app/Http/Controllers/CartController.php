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

        $items = ShoppingCart::getItems();
        // $item->getItems();

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

        $cart = [
            'id' => $product->id,
            'title' => $product->title,
            'quantity' => 1,
            'shortdesc' => $product->shortdesc,
            'price' => $product->price,
            'selectedSize' => $request->selectedSize,
            'selectedTopping' => $request->selectedTopping,
        ];

        $item = new ShoppingCart($cart, $product->id);

        $exists = $item->newItem($cart, $product->id);

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

        ShoppingCart::removeItem($id);

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
        $item = new ShoppingCart($request, $id);
        $item->updateItem($request, $id);

        return redirect()->action('CartController@index');
    }

    /**
     * Sends user to payment page
     *
     * @return void
     */
    public function pay()
    {
        $items = ShoppingCart::getItems();
        return view('pages.pay', compact('items'));
    }
}
