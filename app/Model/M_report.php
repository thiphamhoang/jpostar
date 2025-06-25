<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_report extends Model
{
    protected $table = "report";
	public function F_product(){
        return $this->hasOne('App\Model\M_product','id','product_id');
    }
	public function F_user(){
        return $this->hasOne('App\Model\User','id','user_id');
    }
}
