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

use Modules\Admin\Http\Controllers\RoleController;
use Modules\Admin\Http\Controllers\TestController;

Route::prefix('admin')->middleware('auth:admins')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::resource('role','RoleController');
    Route::get('/role/permission/{role}','RoleController@permission');
    Route::post('/role/permission/{role}','RoleController@permissionStore');
    //分配角色
    Route::post('/roleAssign/{admin}','AdminController@roleAssign');
   
    
});

Route::prefix('admin')->middleware(['guest:admins','web'])->group(function () {
    Route::name('admin.login')->get('/login','TestController@create');
    Route::post('/login','TestController@store')->name('admin.login');
   
   
});