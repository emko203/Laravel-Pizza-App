@extends('layouts.layout')

@section('content')
<div class = "flex-center position-ref full-height">

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{$pizza -> id}}">{{ $pizza -> name }} </a></h4>
    </div>
    @endforeach
</div>
</div>
<a href="/" class="back"> Go Back</a>
@endsection

