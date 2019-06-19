<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function orders(){
		$this->belongsToMany('App\Order', 'orders_products');
	}
}
