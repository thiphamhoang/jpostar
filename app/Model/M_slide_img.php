<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_slide_img extends Model
{
    protected $table = "slide_img";
    public function F_slide(){ 
		  return $this->hasOne('App\Model\M_slide','id','slide_id');
    }
   
}