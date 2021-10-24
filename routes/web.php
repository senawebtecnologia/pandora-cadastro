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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Auth'] , function(){
    Route::get('login', 'AuthController@pageLogin')->name('auth.pageLogin');
    Route::post('login', 'AuthController@Login')->name('auth.login');
    Route::delete('logout', 'AuthController@Logout')->name('auth.logout');        


});

Route::group(['prefix' => 'admin/', 'middleware' => 'auth'], function(){
    
    /**
     * Rotas para Dashboard
     */
    Route::group(['namespace' => 'Dashboard'], function(){
        Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard.index');
    });

    /** 
     * Rotas para Usuario
     */
    Route::group(['namespace' => 'Admin'], function(){

        Route::get('dashboard/user', 'AdminController@index')->name('admin.user.index');
        Route::get('dashboard/user/create', 'AdminController@create')->name('admin.user.create');
        Route::post('dashboard/user/create', 'AdminController@store')->name('admin.user.store');
        Route::get('dashboard/user/{user}', 'AdminController@show')->name('admin.user.show');
        Route::get('dashboard/user/edit/{user}', 'AdminController@edit')->name('admin.user.edit');
        Route::post('dashboard/user/update/{user}', 'AdminController@update')->name('admin.user.update');
        Route::delete('dashboard/user/delete/{user}', 'AdminController@destroy')->name('admin.user.delete');

    });
    
});