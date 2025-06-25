<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_price_detail extends Model
{
    protected $table = "price_detail";
    public function F_price(){ 
		  return $this->hasOne('App\Model\M_price','id','price_id');
    }
   
}