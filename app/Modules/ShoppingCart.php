<?php

namespace App\Modules;
use Session;

class ShoppingCart
{
    public static function getItems()
    {
        $items = Session::get('cart.items');

        return $items;
    }

    public static function addItem($cart)
    {
        if ($cart) {
            session()->push('cart.items', $cart);

            return true;
        }

        return false;
    }

    public static function clearCart()
    {
        Session::forget('cart.items');
    }

    public static function removeItem($id)
    {
        $items = static::getItems();

        if ($items == null){
            return false;
        }

        for ($i = 0; $i <= count($items); $i++) {
            // return $items;
            if ($items[$i]['id'] == $id) {  

                Session::pull('cart.items', $i);
                unset( $items[$i]);
                
            }
        }

    }
}