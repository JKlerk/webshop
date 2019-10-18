<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class PageController extends Controller
{
    /**
     * Gets all products
     *
     * @return void
     */
    public function index() {
    	$products = App\Product::all();
    	return view('pages.index', compact('products'));
    }

    /**
     * Returns profile view
     *
     * @return void
     */
    public function profile()
    {
        return view('pages.profile');
    }

    /**
     * Gets all products and categories
     *
     * @return void
     */
    public function admin() {

    	$products = App\Product::all();
        $categories = App\Category::all();

    	return view('pages.admin', compact('products','categories'));

    }
}
