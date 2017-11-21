<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class renta extends Model
{
  protected $table="rentas";
  protected $primarykey="id";
  protected $fillable=[
    'idpelicula','idusuario',
  ];
}
