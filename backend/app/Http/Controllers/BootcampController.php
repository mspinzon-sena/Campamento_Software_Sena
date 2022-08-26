<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource (entities)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Aquí se mostrarán todos los bootcamps";
    }

    /**
     * Store a newly created resource in storage. (crear un nuevo "bootcamp" en el almacenamiento)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Aquí se van a registrar un nuevo bootcamp";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Mostrar un bootcamp en especifico por id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Actualizar un bootcamp especifico cuyo id sea $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Eliminar un bootcamp especifico cuyo id sea $id";
    }
}
