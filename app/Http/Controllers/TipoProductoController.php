<?php

namespace App\Http\Controllers;

use App\TipoProducto;
use Illuminate\Http\Request;
use App\Http\Requests\PostTipoProductoRequest;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TipoProducto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostTipoProductoRequest $request)
    {
        //
        return TipoProducto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProducto $tipoproducto)
    {
        //
        return TipoProducto::find($tipoproducto);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProducto $tipoproducto)
    {
        //
        return $tipoproducto->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProducto $tipoproducto)
    {
        //
        return  $tipoproducto->delete();
    }
}
