<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ImageController extends Controller
{
	public function getImage($id){
		
		$product = App\Product::find($id);
		return response(base64_decode($product->src), 200)->header('Content-Type', 'image/png');

	}
}
