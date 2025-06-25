<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_permission extends Model
{
    protected $table = "permission";
    
  	public function F_type(){ 
		return $this->belongstoMany('App\Model\M_user_type','type_permission','permission_id','type_id');
	}
	public function F_role(){ 
		return $this->hasMany('App\Model\M_type_permission','permission_id','id');
	}
}
