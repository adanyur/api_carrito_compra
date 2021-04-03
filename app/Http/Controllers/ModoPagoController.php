<?php

namespace App\Http\Controllers;

use App\ModoPago;
use Illuminate\Http\Request;
use App\Http\Requests\PostModoPagoRequest;

class ModoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Modopago::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostModoPagoRequest $request)
    {
        return Modopago::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModoPago  $modoPago
     * @return \Illuminate\Http\Response
     */
    public function show(ModoPago $modopago)
    {
        //
         return ModoPago::find($modopago);
        //return $id;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModoPago  $modoPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModoPago $modopago)
    {
        return $modopago->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModoPago  $modoPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModoPago $modopago)
    {
        //
        return $modopago->delete();
    }
}
