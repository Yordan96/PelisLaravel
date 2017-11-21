@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
<div class="row">
  <div class="row">
  <div class="center"><br>
    <h5 class="light">Listado de peliculas</h5>
  </div>
</div>

  @foreach($peliculas as $pelicula)

   <div class="col s6 m3 l3">

                <div class="card z-depth-2" style="overflow: visible;">

                          <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{URL::asset($pelicula->portada)}}" style="width:100%;height:270px;">
                          </div>
                          @guest
                          @else
                          @if (Auth::user()->id != 1)
                          <div class="card-image">
                            <a href="{{route('Cart.edit',$pelicula->id)}}" class="btn-floating halfway-fab tooltipped waves-effect waves-light  light-blue darken-4" data-position="bottom" data-delay="50" data-tooltip="Rentar"><i class="material-icons">add_shopping_cart</i></a>
                          </div>
                           @else
                           <div class="card-image">
                             <a href="#elim{{$pelicula->id}}" class="modal-trigger left btn-floating halfway-fab tooltipped waves-effect waves-light  red darken-1" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                             <a href="{{route('Pelicula.edit',$pelicula->id)}}" class="btn-floating halfway-fab tooltipped waves-effect waves-light  light-blue darken-4" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                           </div>
                           @endif
                           @endguest

                          <div class="card-content">
                            <span class="caption activator grey-text text-darken-4">{{$pelicula->titulo}}<i class="material-icons right">more_vert</i></span>
                          </div>
                          <div class="card-reveal" style="display: none; transform: translateY(0px);">
                            <span class="card-title grey-text text-darken-4">{{$pelicula->titulo}}<i class="material-icons right">close</i></span>
                            <p><strong>Genero:</strong>{{$pelicula->genero}}</p>
                            <p><strong>Duración:</strong>{{$pelicula->duracion}} minutos</p>
                            <p><strong>Año:</strong>{{$pelicula->anio}}</p>
                            <p><strong>Idioma:</strong>{{$pelicula->idioma}}</p>
                             <a class="waves-effect waves-light btn modal-trigger" href="#modal{{$pelicula->id}}">Trailer</a>
                          </div>
                        </div>
   </div>

   <div id="modal{{$pelicula->id}}" class="modal">
     <div class="modal-content">
       <div class="video-container">
        <iframe width="853" height="480" src="{{$pelicula->trailer}}" frameborder="0" allowfullscreen></iframe>
      </div>
     </div>
     <div class="modal-footer">
       <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
     </div>
   </div>

   <form action="{{route('Pelicula.destroy',$pelicula->id)}}" method="POST">
              {{csrf_field()}}
              {{ method_field('DELETE') }}
                  <div id="elim{{$pelicula->id}}" class="modal">
                    <div class="modal-content">
                      <h4 class="center-align">Desea eliminar?</h4>
                      <center> <i class="center-align medium material-icons">error_outline</i></center>
                      <p class="center-align">Nota: los cambios no pueden deshacerse </p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                      <button class="btn red" type="submit" name="action">Eliminar</button>
                    </div>
                  </div>
    </form>
@endforeach

</div>


<!-- Modal Structure -->


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script>
 $(document).ready(function(){
  $('.modal').modal();
});
 </script>
 @include('sweet::alert')

@endsection
