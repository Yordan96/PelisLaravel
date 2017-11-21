@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
<br>
<div class="row">
<div class="center"><br>
  <h4> Peliculas Alquiladas para <strong>{{ Auth::user()->nombre }}</strong> </h4>
</div>
</div>

<br><br>

<br>
<table class=" striped">
  <thead>
    <tr>
      <th>Portada</th>
      <th>Titulo</th>
  <!--    <th>precio</th> -->
      <th>cantidad</th>
      <!--<th>tamanio</th>-->
    </tr>
  </thead>
  <tbody>

      @foreach($cartItems as $cartItem)
    <tr>

        @foreach($peliculas as $pelicula)
        @if ($pelicula->titulo == $cartItem->name)
                  <td>
        <img src="{{URL::asset($pelicula->portada)}}"  style="width:70;height:70px;">

</td>
        @endif
        @endforeach
      <td>{{$cartItem->name}}</td>
    <!--  <td>{{$cartItem->price}}</td>-->
      <td>{{$cartItem->qty}}</td>
    <!--  <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>-->
    </tr>
    @endforeach
  </tbody>
</table>

<a class="btn btn-floating pulse" href="{{route('Cart.create')}}"><i class="material-icons">check_circle</i></a>
<br><br><br><br>
@endsection
