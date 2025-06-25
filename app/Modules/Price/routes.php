<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'price','namespace'=>'App\Modules\Price\Controllers'], function(){

        Route::get('', 'PriceController@index');
        // them 
        Route::post('', 'PriceController@post_price_new');
        // sua price
        Route::post('edit/{price_id}', 'PriceController@post_price_edit');
        //status
        Route::get('status/{price_id}', 'PriceController@get_change_status');
        //xoa price
        Route::get('del/{price_id}', 'PriceController@get_price_del');

    //danh sach price img
        Route::get('{price_id}/list', 'PriceDetailController@get_price_detail_list');
        // them 
        Route::post('{price_id}/new', 'PriceDetailController@post_price_detail_new');
         // sua price
        Route::get('{price_id}/list/edit/{id}', 'PriceDetailController@get_price_detail_edit');
        Route::post('{price_id}/list/edit/{id}', 'PriceDetailController@post_price_detail_edit');
        //status
        Route::get('{price_id}/list/status/{id}', 'PriceDetailController@get_change_img_status');
        //xoa price
        Route::get('{price_id}/list/del/{id}', 'PriceDetailController@get_price_detail_del');
    });
});