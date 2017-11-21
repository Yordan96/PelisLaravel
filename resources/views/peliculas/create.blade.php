@extends('layouts.master')
@section('title', 'Inicio')
@section('content')
  <div class="row">
		<div class="center"><br>
			<h5 class="light">Nueva pelicula</h5>
		</div>
  </div>

  <div class="card z-depth-4">

    <div class="card-image">

      <a href="{{route('Pelicula.index')}}" class="btn-floating halfway-fab tooltipped waves-effect waves-light  light-blue darken-4" data-position="bottom" data-delay="50" data-tooltip="Regresar"><i class="material-icons">arrow_back</i></a>

    </div>

    <div class="container">
		  <div class="row">
        <form method="POST" action="{{route('Pelicula.store')}}" enctype="multipart/form-data" class="col s12" id="formValidate"><br><br>
          {!! csrf_field() !!}
            <div class="row">
              <div class="input-field col s12 m6 l5">
                <i class="material-icons prefix">bookmark</i>
                <input id="" name="titulo" type="text" class="required">
                <label for="uname">Titulo de pelicula</label>
              </div>

              <div class="input-field col s12 m6 l7">
                <div class="file-field input-field">
                    <div class="btn">
                      <span>Portada<i class="material-icons right">photo</i></span>
                      <input type="file" name="portada">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="">
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">

              <div class="input-field col s3">
                <i class="material-icons prefix">collections_bookmark</i>
                <input  id="" name="genero" type="text" >
                <label for="uname">Género</label>
              </div>
              <div class="input-field col s3">
                <i class="material-icons prefix">date_range</i>
                <input id="" name="anio" type="text" class="required cnumber">
                <label for="uname">Año</label>
              </div>
              <div class="input-field col s3">
                <i class="material-icons prefix">alarm</i>
                <input id="" name="duracion" type="text" class="required cnumber">
                <label for="uname">Duración</label>
              </div>
              <div class="input-field col s3">
                <i class="material-icons prefix">language</i>
                <input id="" name="idioma" type="text" class="required cnumber">
                <label for="uname">idioma</label>
              </div>

            </div>
            <div class="row">

              <div class="input-field col s12">
                <i class="material-icons prefix">local_movies</i>
                <input id="" name="trailer" type="text" class="required cnumber">
                <label for="uname">Trailer</label>
              </div>

            </div>
            <div class="row">

              <div class="input-field col s6 center">
              <button class="btn waves-effect waves-light  light-blue darken-4" type="submit" name="action">
                Agregar
              </button>
            </div>
            </div>



      </form>
      </div>
      </div>
  </div>

 @include('sweet::alert')
@endsection
