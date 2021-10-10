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

Route::group(['prefix' => 'admin/', 'namespace' => 'Admin'], function(){

    /**
     * Rotas para Dashboard
     */

    Route::get('dashboard', 'AdminController@index')->name('admin.user');

    /** 
     * Rotas para Usuario
     */

    Route::get('dashboard', 'AdminController@index')->name('admin.user');
    Route::get('dashboard/create', 'AdminController@create')->name('admin.user.create');
    Route::post('dashboard/create', 'AdminController@store')->name('admin.user.store');
    Route::get('dashboard/edit/{user}', 'AdminController@edit')->name('admin.user.edit');
    Route::post('dashboard/update/{user}', 'AdminController@update')->name('admin.user.update');
    Route::post('dashboard/delete/{user}', 'AdminController@destroy')->name('admin.user.delete');
});