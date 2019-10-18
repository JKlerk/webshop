<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Support\Arr;
use App\Product;

class ShoppingCart extends CartController
{
    /**
     * Returns all items stored in session
     *
     * @return array
     */
    public static function getItems()
    {
        $items = Session::get('cart');

        return $items;
    }

    /**
     * Adds a new item to sessions, if it doenst exist it will return false
     *
     * @param $cart
     * @param $id
     * @return boolean
     */
    public function newItem($cart, $id)
    {
        $specific = $this->getItem($id);

        if (!$specific) {
            Session::push('cart', $cart);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Updates cart session
     *
     * @param $request
     * @param $id
     * @return void
     */
    public function updateItem($request, $id)
    {
        $specific = $this->getItem($id);
        $product = Product::find($id);

        $old = Session::get('cart.' . key($specific));

        Session::forget('cart.' . key($specific));

        $cart = [
            'id' => $product->id,
            'title' => $product->title,
            'quantity' => $request->quantity,
            'shortdesc' => $product->shortdesc,
            'price' => $product->price,
            'selectedSize' => $old['selectedSize'],
            'selectedTopping' => $old['selectedTopping'],
        ];
        Session::push('cart', $cart);
    }

    /**
     * Removes all items form sessions 'cart'
     *
     * @return void
     */
    public static function clearCart()
    {
        Session::forget('cart');
    }

    /**
     * Gets a single item with id
     *
     * @param $id
     * @return array
     */
    public function getItem($id)
    {
        $items = $this::getItems();

        if (!$items) {
            return null;
        }
        $specific = Arr::where($items, function ($value, $key) use ($id) {
            return $value['id'] == $id;
        });

        return $specific;
    }

    /**
     * Removes a single item from cart with id
     *
     * @param $id
     * @return void
     */
    public function removeItem($id)
    {
        $specific = $this->getItem($id);

        Session::forget('cart.' . key($specific));
    }
}
