<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use Image;

class ProductController extends Controller
{
    public function view($id) {

        $product = App\Product::where('id', $id)->with('categories')->first();
    	return view('products.view', compact('product'));
    }

    public function create() {
        $categories = App\Category::all();

        return view('products.create', compact('categories'));
    }
    
    public function PostCreate(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'shortdesc' => 'required',
            'desc' => 'required',
            'status' => 'required',
            'price' => 'required',
            'file' => 'required'
        ]);

        $product = new App\Product;

        $file = base64_encode(file_get_contents($request->file('file')));

        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->shortdesc = $request->shortdesc;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->src = $file;
        $product->save();

        foreach ($request->category as $category) {
            $product->categories()->attach($category);
        }

        return redirect(url('/admin'));
    }

    public function edit($id)
    {
        $product = App\Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function postEdit(Request $request, $id)
    {
        $product = App\Product::find($id);
        $product->title = $request->title;
        $product->desc = $request->shortdesc;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();
        return redirect(url('/admin'));
    }

    public function delete($id)
    {
        $product = App\Product::find($id);
        $product->delete();
        return redirect()->back();     
    }
}
