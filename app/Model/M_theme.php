<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class M_theme extends Model
{
    protected $table = "theme";
    public function F_user(){ 
        return $this->hasOne('App\Model\User','id','user_id');
    }
    public function F_parent(){ 
        return $this->hasOne('App\Model\M_theme','theme_id','parent_id');
    }
    public function F_meta(){ 
        return $this->hasMany('App\Model\M_theme_meta','theme_id','id');
    }
    public function F_popup(){ 
        return $this->hasOne('App\Model\M_popup','id','popup');
    }
    public function F_widget(){ 
        return $this->hasMany('App\Model\M_theme_widget','theme_id','id');
    }
    public function F_theme_row(){ 
        return $this->hasMany('App\Model\M_theme_row','theme_id','id')->select('id','link_row_id','theme_id','type','style','name');
    }
 
}