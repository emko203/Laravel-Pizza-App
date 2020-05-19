<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'Margaritha','base' => 'Tomato sauce','price' => 5.99],
            ['type' => 'Salami','base' => 'Tomato sauce, Salami','price' => 7.99],
            ['type' => 'Funghi','base' => 'Tomato sauce, Mushrooms','price' => 7.99]
        ];

        return view('pizzas', [
            'pizzas' => $pizzas

        ]);

    }

    public function show($id){
        return view('details',['id' => $id]);
    }
}
