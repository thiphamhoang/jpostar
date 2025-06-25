<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_price extends Model
{
    protected $table = "price";
    public function F_price_detail(){ 
		  return $this->hasMany('App\Model\M_price_detail','price_id','id');
    }
}