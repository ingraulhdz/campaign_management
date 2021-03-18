<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistritoFederal extends Model
{
    use HasFactory;
        protected $table = 'Distritos_federales';
            protected $fillable = ['nombre'];


}
