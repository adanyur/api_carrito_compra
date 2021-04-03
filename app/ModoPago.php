<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModoPago extends Model
{
    protected $table = 'modo_pago';
    protected $primaryKey = 'id';
    protected $fillable = ['descripcion','estado'];
}
