<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_menu_type extends Model
{
   protected $table = "menu_type";
      public function F_menu(){
      return $this->hasMany('App\Model\M_menu','menu_type_id','id')->orderby('orderby','asc');
   }
}
