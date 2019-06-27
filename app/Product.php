<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function orders(){
		return $this->belongsToMany('App\Order', 'orders_products');
	}

	public function categories(){
		return $this->belongsToMany('App\Category', 'categories_products');
	}
}
