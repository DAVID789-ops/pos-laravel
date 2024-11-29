<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    public $timestamps = false; // Desactiva las marcas de tiempo automáticas

    protected $table = 'sucursales';

    protected $fillable = [
        'nombre',
        'estado',

    ];
}
