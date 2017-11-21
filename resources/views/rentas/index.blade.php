@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
<br>
<div class="row">
<div class="center"><br>
  <h4> Peliculas Alquiladas</h4>
</div>
</div>

<br><br>

<br>
<table class=" striped">
  <thead>
    <tr>
      <th>Usuario</th>
  <!--    <th>precio</th> -->
      <th>Pelicula</th>
      <!--<th>tamanio</th>-->
    </tr>
  </thead>
  <tbody>

      @foreach($rentas as $renta)
    <tr>

      <td>{{$renta->nombre}}</td>

      <td>{{$renta->titulo}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

<a class="btn btn-floating pulse" href="{{route('Cart.create')}}"><i class="material-icons">check_circle</i></a>
<br><br><br><br>
@endsection
