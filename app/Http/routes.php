<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    $iso = new Matriphe\ISO639\ISO639;
    print_r($iso->languages);
});

Route::post('login', 'SessionsController@store');
Route::get('login', 'SessionsController@create');
Route::delete('logout', 'SessionsController@destroy');

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function() {
    Route::resource('admin/dashboard', 'DashboardCotroller', 
        ['only' => 'index']);
    Route::resource('admin/customers', 'CustomersController');
    Route::resource('admin/password', 'PasswordController', ['only' => ['create', 'store']]);
    Route::resource('admin/categories', 'CategoriesController');
    Route::resource('admin/languagies', 'LanguagiesController');
});