<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_comment extends Model
{
    protected $table = "comment";
    public function F_product(){ 
        return $this->hasOne('App\Model\M_product','id','product_id');
    }

}