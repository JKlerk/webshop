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
    public function getItems(){
        $items = Session::get('cart');
        return $items;
    }

    /**
     * Adds a new item to sessions, if it exist it will return false
     *
     * @param $cartItem
     * @param $id
     * @return boolean
     */
    public function newItem($cartItem)
    {
        $specific = $this->getSpecific($cartItem['id']);

        if (!$specific) {
            Session::push('cart', $cartItem);
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
        $specific = $this->getSpecific($id);
        $product = Product::find($id);

        $old = Session::get('cart.' . key($specific));

        Session::forget('cart.' . key($specific));

        $cartItem = [
            'id' => $product->id,
            'title' => $product->title,
            'quantity' => $request->quantity,
            'shortdesc' => $product->shortdesc,
            'price' => $product->price,
            'selectedSize' => $old['selectedSize'],
            'selectedTopping' => $old['selectedTopping'],
        ];
        Session::push('cart', $cartItem);
    }

    /**
     * Removes all items form sessions 'cart'
     *
     * @return void
     */
    public function clearCart()
    {
        Session::forget('cart');
    }

    /**
     * Gets a single item with id
     *
     * @param $id
     * @return array
     */
    public function getSpecific($id)
    {
        $items = $this->getItems();

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
        $specific = $this->getSpecific($id);

        Session::forget('cart.' . key($specific));
    }
}
