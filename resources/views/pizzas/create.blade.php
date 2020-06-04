@extends('layouts.layout')

@section('content')
<div class = "flex-center position-ref full-height">
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
            <option value="classic">Classic</option>
            <option value="crispy thin">Crispy Thin</option>
            <option value="italian">Italian</option>
        </select>
        <fieldset>
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
</div>
<a href="/" class="back"> Go Back</a>
@endsection
