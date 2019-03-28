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

Route::group(["prefix" => "/dashboard", 'middleware' => ['auth:admin']], function () {

    Route::resource('/items','ItemController');

    Route::resource('/groups','GroupController');

    Route::get('/users','UserController@index');
    Route::get('/users','UserController@index');
    Route::get('/users/{user}/edit','UserController@edit');
    Route::put('/users/{user} ','UserController@update');
    Route::delete('/users','UserController@destroy');

    Route::get('/orders','OrderController@notCompletedOrders');
    Route::get('/orders/completed','OrderController@completedOrders');
    Route::put('/orders/{order}/change','OrderController@completedOrders');

    Route::get('/logout', '\App\Http\Controllers\Auth\AdminLoginController@logout');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-login', 'Auth\AdminLoginController@showLoginForm');

Route::post('/admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);

Route::get("/","SiteController@store");

Route::get('/about','SiteController@home');

Route::get('items/{group}/','SiteController@getGroupItems');


Route::group(["middleware"=>"auth"],function(){
    Route::post('/orderItem/{Item}','SiteController@order');
});

Route::get("/groups","SiteController@getGroups");

Route::get("/items",'SiteController@getItems');







