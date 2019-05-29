<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view() {
    	return view('products.view');
    }
    public function edit($id)
    {
        $article = App\Product::find($id);
        return view('products.edit', compact('products'));
    }

    public function create() {
		return view('products.create');
    }
}
