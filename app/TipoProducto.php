<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    //
    protected $table='tipo_producto';
    protected $primaryKey = 'id';
    protected $fillable = ['descripcion','estado'];
}
