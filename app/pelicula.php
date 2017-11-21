<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
  protected $table="peliculas";
  protected $primarykey="id";
  protected $fillable=[
    'titulo','genero','duracion','anio','idioma','portada','trailer',
  ];
}
