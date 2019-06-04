<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

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


    public function PostCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'size' => 'required',
            'price' => 'required'
        ]);
        $product = new App\Product;
        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->save();
        return redirect(url('/admin'));
    }
}
