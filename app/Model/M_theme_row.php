<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
	
class M_theme_row extends Model
{
    protected $table = "theme_row";

	public function F_slide_img(){ 
		return $this->hasMany('App\Model\M_slide_img','slide_id','slide_id')->orderby('orderby','asc')->where('status','on');
	}

	public function F_slide_img_2(){ 
		return $this->hasMany('App\Model\M_slide_img','slide_id','slide_id_2')->orderby('orderby','asc')->where('status','on');
	}
	public function F_slide_img_3(){ 
		return $this->hasMany('App\Model\M_slide_img','slide_id','slide_id_3')->orderby('orderby','asc')->where('status','on');
	}
	public function F_tab_item(){ 
		return $this->hasMany('App\Model\M_tab_item','tab_id','tab_id')->orderby('orderby','asc');
	}

	public function F_menu(){ 
		return $this->hasMany('App\Model\M_menu','menu_type_id','menu_id')->orderby('orderby','asc')->where('status','on');
	}
	public function F_menu_2(){ 
		return $this->hasMany('App\Model\M_menu','menu_type_id','menu_id_2')->orderby('orderby','asc')->where('status','on');
	}
	public function F_price(){ 
		return $this->hasMany('App\Model\M_price_detail','price_id','price_id')->orderby('orderby','asc')->where('status','on');
	}
	public function F_price_2(){ 
		return $this->hasMany('App\Model\M_price_detail','price_id','price_id_2')->orderby('orderby','asc')->where('status','on');
	}
	public function F_post(){ 
		return $this->hasOne('App\Model\M_post','id','post_id')->where('status','on');
	}
	public function F_link_row_id(){ 
		return $this->hasOne('App\Model\M_theme_row','id','link_row_id');
	}
	public function F_theme(){ 
		return $this->hasOne('App\Model\M_theme','id','theme_id');
	}
	public function F_post_2(){ 
		return $this->hasOne('App\Model\M_post','id','post_id_2')->where('status','on');
	}
	public function F_post_3(){ 
		return $this->hasOne('App\Model\M_post','id','post_id_3')->where('status','on');
	}
	public function F_post_4(){ 
		return $this->hasOne('App\Model\M_post','id','post_id_4')->where('status','on');
	}
	 
	
	public function F_cat_id(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_id');
	}
	public function F_cat_id_2(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_id_2');
	}
	public function F_cat_id_3(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_id_3');
	}
	public function F_cat_id_4(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_id_4');
	}
	public function F_cat_list_id(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_list_id');
	}
	public function F_cat_product_id(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_product_id');
	}
	public function F_cat_product_id_2(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_product_id_2');
	}
	public function F_cat_list_id_2(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_list_id_2');
	}
	public function F_cat_post_id(){ 
		return $this->hasMany('App\Model\M_cat','parent_id','cat_list_id');
	}
	
	public function F_cat_post_id_2(){ 
		return $this->hasOne('App\Model\M_cat','id','cat_post_id_2');
	}
	public function F_cat_post_sub_id(){ 
		return $this->hasMany('App\Model\M_cat','parent_id','cat_post_sub_id');
	}
	public function F_cat_post_sub_id_2(){ 
		return $this->hasMany('App\Model\M_cat','parent_id','cat_post_sub_id_2');
	}
}
