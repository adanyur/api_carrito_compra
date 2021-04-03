<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table='producto';
    protected $primaryKey = 'id';
    protected $fillable = ['id_tipo_producto','descripcion','precio','estado'];
}
