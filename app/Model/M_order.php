<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_order extends Model
{
    protected $table = "orders";
	public function F_product(){ 
		return $this->hasOne('App\Model\M_product','id','product_id');
	}
}
