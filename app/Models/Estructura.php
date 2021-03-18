<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Estructura extends Model
{
    use SoftDeletes;

    
    protected $table = 'estructura';
    protected $fillable = [

         'descripcion'
    ];


    public function estado(){
                return $this->belongsTo('App\Models\Estado');
    }

    
    public function municipio(){
                return $this->belongsTo('App\Models\Municipio');
    }

    
    public function localidad(){
                return $this->belongsTo('App\Models\Localidad');
    }

     
    public function distritoFederal(){
                return $this->belongsTo('App\Models\DistritoFederal');
    }

     
    public function distritoLocal(){
                return $this->belongsTo('App\Models\DistritoLocal');
    }


        
    public function seccion(){
                return $this->belongsTo('App\Models\Seccion');
    }
  public function area(){
                return $this->belongsTo('App\Models\Area');
    }

    //   public function grupo(){
    //             return $this->belongsTo('App\Models\Grupo');
    // }

      public function cargoCampana(){
                return $this->belongsTo('App\Models\CargoCampana');
    }

            
    public function nivelAcademico(){
                return $this->belongsTo('App\Models\NivelAcademico');
    }


        public function areaProfesional(){
                return $this->belongsTo('App\Models\AreaProfesion');
    }



}