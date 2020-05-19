@extends('layouts.layout')

@section('content')
<div class = "flex-center position-ref full-height">
    <div class="content">
    <img src="/img/pizza-logo.jpg" alt="pizza logo">
        <div class="title m-b-md">
            DomiYes Pizzas
        </div>
        <p class="mssg">{{ session('mssg')}}</p>
        <div class="links">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <a href="/pizzas/create">Order a Pizza</a>
            <a href="/pizzas">See All Orders</a>
        </div>
    </div>
</div>
@endsection
