<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $table='orden';
    protected $primaryKey = 'id';
    protected $fillable = ['id_modo_pago','id_usuario','estado'];
}
