<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Persona extends Model
{
    use SoftDeletes;

    //
    protected $fillable = [

        'name', 'description'
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


            
    public function nivelAcademico(){
                return $this->belongsTo('App\Models\NivelAcademico');
    }


        public function areaProfesional(){
                return $this->belongsTo('App\Models\AreaProfesion');
    }




    
}