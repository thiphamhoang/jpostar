<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('','Controller@get_home');

Route::post('_form_/regis','Controller@post_regis');

Route::get('page/{urlPage}','Controller@get_page');
Route::get('{urlPost}.html','Controller@get_post');

Route::get('{url_cat}','Controller@get_cat');


Auth::routes();

// tool
Route::get('tool/check_email/{email}/{id}','Controller@get_check_email');

// dang nhap
Route::get('admin/login',['as'=>'getlogin','uses'=>'Auth\LoginController@get_login']);
Route::post('admin/login',['as'=>'postlogin','uses'=>'Auth\LoginController@post_login']);
Route::get('admin/logout',['as'=>'postlogin','uses'=>'Auth\LoginController@get_logout']);
//dang ky
Route::get('admin/regis',['as'=>'getregis','uses'=>'Auth\RegisterController@get_regis']);
Route::post('admin/regis',['as'=>'postregis','uses'=>'Auth\RegisterController@create']);


Auth::routes();
