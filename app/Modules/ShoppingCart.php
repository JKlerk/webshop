<?php

namespace App\Modules;

use Session;
use Illuminate\Support\Arr;
use App\Product;

class ShoppingCart
{
    public static $id;

    public static function getItems()
    {
        $items = Session::get('cart');

        return $items;
    }

    public static function addItem($cart, $product)
    {
        $specific = static::getItem($product->id);

        // if ($specific) {
        //     if (!Session::has('cart.' . key($specific))) {
        //         if ($cart) {
        //             Session::push('cart', $cart);
        //         return true;
        //     }
        // }
        // } else {
        // return false;            
        // }

        if (!$specific) {
            Session::push('cart', $cart);
            return true;
        } else {
            if (!Session::has('cart.' . key($specific))) {
                if ($cart) {
                    Session::push('cart', $cart);
                    return true;
                }
            } else {
                return false;
            }
        }
    }

    public static function updateItem($id, $request) {
       $specific = static::getItem($id);
       $product = Product::find($id);

       Session::forget('cart.' . key($specific));

       $cart = [ $id = [
                'id' => $product->id,
                'title' => $product->title,
                'quantity' => $request->quantity,
                'shortdesc' => $product->shortdesc,
                'price' => $product->price,
                'selectedSize' => $request->selectedSize,
                'selectedTopping' => $request->selectedTopping,
            ]
        ];

        Session::push('cart', $cart);

    }

    public static function clearCart()
    {
        Session::forget('cart');
    }

    public static function getItem($id)
    {
        static::$id = $id;

        $items = static::getItems();

        if (!$items) {
            return null;
        }

        $specific = Arr::where($items, function ($value, $key) {
            return $value[0]['id'] == static::$id;
        });

        return $specific;
    }

    public static function removeItem($id)
    {  
        $specific = static::getItem($id);

        Session::forget('cart.' . key($specific));

    }
}