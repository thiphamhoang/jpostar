<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_post extends Model
{
    protected $table = "post";
    
    public function F_cat(){ 
      return $this->belongstoMany('App\Model\M_cat','post_cat','post_id','cat_id');
    }
    public function F_tag(){ 
		  return $this->belongstoMany('App\Model\M_tag','post_tag','post_id','tag_id');
    }
  
    public function F_user(){ 
        return $this->hasOne('App\Model\User','id','user_id');
    }
 
    public function F_post_type(){ 
      return $this->hasOne('App\Model\M_post_type','id','post_type_id');
    }
 
  
    public function F_comment(){ 
      return $this->hasMany('App\Model\M_comment','post_id','id');
    }
  
}