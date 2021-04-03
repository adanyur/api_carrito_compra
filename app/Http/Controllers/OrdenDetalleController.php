<?php

namespace App\Http\Controllers;

use App\OrdenDetalle;
use Illuminate\Http\Request;

class OrdenDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return OrdenDetalle::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return OrdenDetalle::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenDetalle $ordendetalle)
    {
        //
        return OrdenDetalle::find($ordendetalle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenDetalle $ordendetalle)
    {
        //
        return $ordendetalle->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenDetalle  $ordenDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenDetalle $ordenDetalle)
    {
        //
        return $ordendetalle->delete();
    }
}
