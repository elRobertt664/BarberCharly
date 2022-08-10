<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
class Citascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Citas::all();
        return view('welcome',  compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new CitasVentas();
        $cita->nombre = $request->nombre;
        $cita->fecha_hora = $request->fecha_hora;
        $cita->precio = $request->precio;
        $cita->completado = $request->completado;

        $cita->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $cita = new CitasVentas();
        $cita->nombre = $request->nombre;
        $cita->fecha_hora = $request->fecha_hora;
        $cita->precio = $request->precio;
        $cita->completado = $request->completado;

        $cita->save();

        return $cita;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Venta::destroy($request->id);
        return $cita;
    }
}
