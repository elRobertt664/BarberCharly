<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\CitasVentas;
class Citascontroller extends Controller
{

    function guardar(Request $request){

         $cita = new Citas;
        $cita->nombre = $request->input("vehiculo");
        $cita->fecha = $request->input("modelo");
        $cita->hora = $request->input("modelo1");
        $cita->precio = $request->input("puertas");
        $cita->completado = $request->input("completado");
        $cita->save();
        $cita = Citas::all();
        return redirect() -> route('welcome.index');
    }
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

     Citas::findOrFail($id)
        ->update($request->all());
     return redirect()->route('welcome.index');


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
