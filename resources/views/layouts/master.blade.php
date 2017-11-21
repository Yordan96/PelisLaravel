<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>MovieRent</title>
    <!-- CSS  -->
    <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('css/sweetalert.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <link rel="canonical" href="https://themes.materializecss.com/pages/docs">
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/home" class="brand-logo"><i class="material-icons">movie_filter</i>MovieRent</a>



      <ul class="right hide-on-med-and-down">
                    <!--guest-->
        @guest
         <li><a href="{{ route('login') }}">Ingresar</a></li>
           <li><a href="{{ route('register') }}">Registrarse</a></li>
         @else
         @if (Auth::user()->id == 1)
           <li><a href="{{route('Pelicula.create')}}"> <i class="material-icons">movie</i></a></li>
           <li><a href="{{route('Renta.index')}}"> <i class="material-icons">shopping_basket</i></a></li>
        @else
        <li>Usuario:{{ Auth::user()->nombre }}</li>
        <li><a href="{{route('Cart.index')}}"><i class="material-icons">shopping_cart</i></a></li>
        <li>{{Cart::count()}}</li>
        @endif
                     <li>
                         <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                           <i class="material-icons">directions_run</i>
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>


         @endguest
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="container">
      @yield('content')
  </div>

  <footer class="page-footer #1565c0 blue darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">RentMovie</h5>
          <p class="grey-text text-lighten-4">Aplicación web para rentar peliculas</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Creado por <a class="orange-text text-lighten-3" href="http://yordan.esy.es/mipagina/index.html">Yordan</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.timeago.min.js')}}"></script>
  <script src="{{URL::asset('js/prism.js')}}"></script>
  <script src="{{URL::asset('js/materialize.js')}}"></script>
  <script src="{{URL::asset('js/init.js')}}"></script>

  </body>
  </html>
