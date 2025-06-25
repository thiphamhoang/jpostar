<?php
$namespace = 'App\Modules\Api\Controllers';
Route::group([
    'module' => 'Api',
    'prefix'=>'api/v1',
    'namespace' => $namespace
], function () {
    // theme
        Route::middleware('auth:api')->get('config/website', 'ConfigController@website')->name('config.website');
       
});