<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', 'PizzaController@index');
Route::get('/pizzas/create' ,'PizzaController@create');
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show');
Route::delete('/pizzas/{id}','PizzaController@destroy');



Route::get('/profile/excel','UserController@excel')->name('export_excel.excel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/profile', 'UserController@profile');

Route::post('/profile','UserController@update_avatar');


