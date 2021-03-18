<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cargo extends Model
{
    use SoftDeletes;

    // 
    protected $table ='cargos_campana';
    protected $fillable = [

        'nombre', 'descripcion'
    ];
}