<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Artical\Http\Controllers\ContentController;

Route::prefix('artical')->group(function() {
    Route::get('/', 'ArticalController@index');
});

Route::prefix('artical')->middleware(['web','auth:admins'])->group(function(){
    Route::resource('category','CategoryController');//栏目管理
    Route::resource('content','ContentController');
    Route::post('imgUp','ContentController@imgUp');//图片上传
    Route::any('/simditor/upload','ContentController@simditorUp');
});