<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenDetalle extends Model
{
    //
    protected $table='orden_detalle';
    protected $primaryKey = 'id';
    protected $fillable = ['id_orden','id_producto','cantidad','precio','subtotal','igv','total','id_usuario'];
}
