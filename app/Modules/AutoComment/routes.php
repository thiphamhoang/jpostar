<?php

Route::group(['prefix'=>'admin','middleware' => ['web', 'checkAdminLogin']], function(){
    Route::group(['prefix'=>'autocomment','namespace'=>'App\Modules\AutoComment\Controllers'], function(){
        Route::get('','AutoCommentController@index');

        // contact 
        Route::get('contact','ContactController@get_contact');
        Route::post('contact/new_multi','ContactController@post_contact_new_multi');
        Route::post('contact/edit/{id}','ContactController@post_contact_edit');
        Route::get('contact/del/{id}','ContactController@get_contact_del');
        
        // comment content
        Route::get('commentContent','CommentContactController@get_commentContent');
        Route::post('commentContent/new_multi','CommentContactController@post_commentContent_new_multi');
        Route::post('commentContent/edit/{id}','CommentContactController@post_commentContent_edit');
        Route::get('commentContent/del/{id}','CommentContactController@get_commentContent_del');




        Route::post('addComment/{post_id}','AutoCommentController@post_comment_post');
    });
});