<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'theme'], function(){
        // sidebar
        Route::post('sidebar_order', 'App\Modules\Theme\Controllers\SidebarController@post_theme_sidebar_order');
        Route::get('sidebar_new/{type}', 'App\Modules\Theme\Controllers\SidebarController@get_theme_sidebar_new');

        Route::group(['prefix'=>'sidebar'], function(){
            Route::get('','App\Modules\Theme\Controllers\SidebarController@get_sidebar');
            Route::get('{sidebar_id}','App\Modules\Theme\Controllers\SidebarController@sidebar');
            Route::post('{sidebar_id}', 'App\Modules\Theme\Controllers\SidebarController@post_theme_sidebar_edit');
            Route::get('{sidebar_id}/del', 'App\Modules\Theme\Controllers\SidebarController@get_theme_sidebar_del');
        });
    });


    Route::group(['prefix'=>'theme/{id_theme}/'], function(){
         //post
         Route::get('post','App\Modules\Theme\Controllers\PostThemeController@index');
         Route::post('post','App\Modules\Theme\Controllers\PostThemeController@post_theme_post_edit');
         // cat
         Route::get('cat','App\Modules\Theme\Controllers\CatThemeController@index');
         Route::post('cat','App\Modules\Theme\Controllers\CatThemeController@post_theme_cat_edit');
         //info
         Route::get('info','App\Modules\Theme\Controllers\InfoController@info');
         Route::post('info','App\Modules\Theme\Controllers\InfoController@info_edit');

         // row
         Route::post('row_order', 'App\Modules\Theme\Controllers\ThemeController@post_theme_row_order');
         Route::post('row_new', 'App\Modules\Theme\Controllers\ThemeController@post_theme_row_new');
         Route::group(['prefix'=>'row'], function(){
            Route::get('','App\Modules\Theme\Controllers\ThemeController@index');
            Route::get('{row_id}','App\Modules\Theme\Controllers\ThemeController@row');
            Route::post('{row_id}', 'App\Modules\Theme\Controllers\ThemeController@post_theme_row_edit');
            Route::get('status/{id}', 'App\Modules\Theme\Controllers\ThemeController@get_change_status');
            Route::get('del/{row_id}', 'App\Modules\Theme\Controllers\ThemeController@get_theme_row_del');


         });

   });

});
