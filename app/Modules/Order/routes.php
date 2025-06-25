<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'order','namespace'=>'App\Modules\Order\Controllers'], function(){
        Route::get('', 'OrderController@index');
        // them 
        Route::post('new', 'OrderController@post_order_new');
        Route::get('export', 'OrderController@get_export');
        // sua order
        Route::post('edit/{order_id}', 'OrderController@post_order_edit');
        //status
        Route::get('status/{order_id}', 'OrderController@get_change_status');
        //xoa order
        Route::get('del/{order_id}', 'OrderController@get_order_del');
    });
});