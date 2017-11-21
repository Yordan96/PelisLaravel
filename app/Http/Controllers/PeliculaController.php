<?php

namespace App\Http\Controllers;

use App\pelicula;
use Illuminate\Http\Request;
use File;
use Alert;
class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {

        $ruta=$request->file('portada')->store('portadas');
        $ruta="img/".$ruta;
        $pelicula = new pelicula;
        $pelicula->titulo = $request->titulo;
        $pelicula->genero = $request->genero;
        $pelicula->duracion = $request->duracion;
        $pelicula->anio = $request->anio;
        $pelicula->idioma = $request->idioma;
        $pelicula->portada = $ruta;
        $pelicula->trailer = $request->trailer;
        $pelicula->save();

      } catch (Exception $e) {
          return back();
      }

      alert()->success('Rango', 'Creado');
        return redirect('home');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(pelicula $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pelicula = pelicula::findOrFail($id);
      return view('peliculas.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pelicula = pelicula::findOrFail($id);
      $pelicula->titulo = $request->titulo;
      $pelicula->genero = $request->genero;
      $pelicula->duracion = $request->duracion;
      $pelicula->anio = $request->anio;
      $pelicula->idioma = $request->idioma;
      $pelicula->trailer = $request->trailer;
      $pelicula->save();
      return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pelicula = pelicula::findOrFail($id);
      $pelicula->delete();
      Alert::message('La pelicula se elimino', 'Exito');
      return back();
    }
}
