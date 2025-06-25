<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function F_user_type(){ 
        return $this->hasOne('App\Model\M_user_type','id','user_type_id');
    }
    public function F_tinh(){ 
        return $this->hasOne('App\Model\M_tinh','id','city');
    }
    public function F_domain(){ 
        return $this->hasMany('App\Model\M_domain','user_id','id');
    }
    public function F_orders(){ 
        return $this->hasMany('App\Model\M_orders','user_id','id');
    }
    public function F_theme(){ 
        return $this->hasMany('App\Model\M_user_theme','user_id','id');
    }
    //phan quyen
    public function F_permission(){ 
		return $this->belongstoMany('App\Model\M_permission','type_permission','user_id','permission_id');
	}
    public function F_type_role(){ 
        return $this->belongsto('App\Model\M_user_type','id','user_type_id');
    }
    
 
}
