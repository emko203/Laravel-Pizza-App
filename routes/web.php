<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'Margaritha','base' => 'Tomato sauce','price' => 5.99],
        ['type' => 'Salami','base' => 'Tomato sauce, Salami','price' => 7.99],
        ['type' => 'Funghi','base' => 'Tomato sauce, Mushrooms','price' => 7.99]
];

    return view('pizzas', [
        'pizzas' => $pizzas

    ]);

});



Route::get('/pizzas/{id}', function($id) {

     return view('details',['id' => $id]);
});



