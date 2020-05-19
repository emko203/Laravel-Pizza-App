@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="Margaretha">Margaretha</option>
            <option value="Salami">Salami</option>
            <option value="Fungi">Fungi</option>
        </select>
        <label for="type">Choose base</label>
        <select name="base" id="base">
            <option value="TM">Tomato sauce, Mozzarella</option>
            <option value="TSM">Tomato sauce, Salami, Mozzarella</option>
            <option value="TMM">Tomato sauce, Mushrooms, Mozzarella</option>
        </select>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
