<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;

class PageController extends Controller
{
    public function index() {
    	$products = App\Product::all();
    	return view('pages.index', compact('products'));
    }
    public function view() {
    	return view('pages.view');
    }
    public function edit($id)
    {
        $article = App\Product::find($id);
        return view('pages.edit', compact('products'));
    }

    public function create() {
		return view('pages.create');
    }
}
