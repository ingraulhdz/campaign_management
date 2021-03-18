<?php

namespace App\Http\Controllers;

use App\Models\Estructura;
use App\Models\Municipio;
use App\Models\Localidad;
use App\Models\Seccion;
use App\Models\DistritoLocal;
use Illuminate\Http\Request;

class EstructuraController extends Controller
{


    public function index()
    {
        $estructuras = Estructura::orderBy('id', 'ASC')->get();
        return view('estructuras.index', compact('estructuras'));
    }



    public function create()
    {
        return view('estructuras.create');
    }


public function getMunicipios($estado){

             $municipios = Municipio::where('estado_id',$estado)->get();
    return $municipios;

}

public function getLocalidades($municipio){
             $localidades = Localidad::where('municipio_id',$municipio)->get();
    return $localidades;

}

public function getDistritosLocales($distritoFederal){
             $distritosLocales = DistritoLocal::where('distrito_federal_id',$distritoFederal)->get();
    return $distritosLocales;

}

public function getSecciones($distritoLocal){
             $secciones = Seccion::where('distrito_local_id',$distritoLocal)->get();
    return $secciones;

}

    
    public function store(Request $request)
    {

        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',
            'apellido_paterno' => 'required|min:2|max:244',
            'fecha_nacimiento' => 'required',
            'curp' => 'required|min:18|max:18',
            'clave_electoral' => 'required|min:18|max:18',
            'calle' => 'required|min:2|max:200',
            'numero_exterior' => 'required|min:2|max:200',
            'estado_id' => 'required',
            'municipio_id' => 'required',
                        'distrito_federal_id' => 'required',
            'distrito_local_id' => 'required',
            'seccion_id' => 'required',
                        'telefono_celular' => 'required',
            'email' => 'required',






        ]);
        try {

            $curp = $request->curp;

            

            

            $estructura = new Estructura();
      $estructura->nombre = $request->nombre;
       $estructura->apellido_paterno = $request->apellido_paterno;
    $estructura->apellido_materno = $request->apellido_materno;
      $estructura->fecha_nacimiento = $request->fecha_nacimiento;
      $estructura->curp = $request->curp;
      $estructura->clave_electoral = $request->clave_electoral;
      $estructura->calle = $request->calle;
      $estructura->numero_exterior = $request->numero_exterior;
      $estructura->numero_interior = $request->numero_interior;
      $estructura->estado_id = $request->estado_id;
      $estructura->municipio_id = $request->municipio_id;
      $estructura->localidad_id = $request->localidad_id;
      $estructura->distrito_federal_id = $request->distrito_federal_id;
      $estructura->distrito_local_id = $request->distrito_local_id;
      $estructura->seccion_id = $request->seccion_id;
      $estructura->telefono_celular = $request->telefono_celular;
      $estructura->telefono_casa = $request->telefono_casa;
      $estructura->email = $request->email;
      $estructura->facebook = $request->facebook;
      $estructura->twitter = $request->twitter;
      $estructura->instagram = $request->instagram;
      $estructura->nivel_academico_id = $request->nivel_academico;
      $estructura->area_profesional_id = $request->area_profesional_id;
      $estructura->actividad_actual = $request->actividad_actual;
      $estructura->cargo_campana_id = $request->cargo_campana_id;
      $estructura->area_id = $request->area_id;
      $estructura->distrito_federal_asignado = $request->distrito_federal_asignado;
      $estructura->distrito_local_asignado = $request->distrito_local_asignado;
      $estructura->seccion_asignado = $request->seccion_asignado;
      $estructura->area_id = $request->area_id;
     // $estructura->curriculum = $request->curriculum;
     // $estructura->foto = $request->foto;

            $estructura->save();

if($request->foto){
            $imageName = $estructura->id.'.'.request()->foto->getClientOriginalExtension();
            $path = 'estructura/fotos/';

            request()->foto->move(public_path($path), $imageName);
$estructura->foto = $path.''.$imageName;
            $estructura->save();
}

if($request->curriculum){

$pathCV = 'estructura/curriculums/'; 
               $estructura->curriculum = $pathCV.'curriculum_'.$estructura->id;
    $request->curriculum->storeAS($pathCV, 'curriculum_'.$estructura->id.'.pdf');
                            $estructura->save();


}
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'El Estructura ha sido creado.';
        \Session::flash('message', $message);
        return redirect()->route('estructuras.index');
    }




    public function edit($id)
    {
        $estructura = Estructura::findOrFail($id);
        return view('estructuras.edit', compact('estructura'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',


        ]);
        try {
            $estructura = Estructura::findOrFail($id);


            

      $estructura->nombre = $request->nombre;
       $estructura->apellido_paterno = $request->apellido_paterno;
      $estructura->apellido_materno = $request->apellido_materno;
      $estructura->fecha_nacimiento = $request->fecha_nacimiento;
      $estructura->curp = $request->curp;
      $estructura->clave_electoral = $request->clave_electoral;
      $estructura->calle = $request->calle;
      $estructura->numero_exterior = $request->numero_exterior;
      $estructura->numero_interior = $request->numero_interior;
      $estructura->estado_id = $request->estado_id;
      $estructura->municipio_id = $request->municipio_id;
      $estructura->localidad_id = $request->localidad_id;
      $estructura->distrito_federal_id = $request->distrito_federal_id;
      $estructura->distrito_local_id = $request->distrito_local_id;
      $estructura->seccion_id = $request->seccion_id;
      $estructura->telefono_celular = $request->telefono_celular;
      $estructura->telefono_casa = $request->telefono_casa;
      $estructura->email = $request->email;
      $estructura->facebook = $request->facebook;
      $estructura->twitter = $request->twitter;
      $estructura->instagram = $request->instagram;
      $estructura->nivel_academico_id = $request->nivel_academico;
      $estructura->area_profesional_id = $request->area_profesional_id;
      $estructura->actividad_actual = $request->actividad_actual;
      $estructura->cargo_campana_id = $request->cargo_campana_id;
      $estructura->area_id = $request->area_id;
      $estructura->distrito_federal_asignado = $request->distrito_federal_asignado;
      $estructura->distrito_local_asignado = $request->distrito_local_asignado;
      $estructura->seccion_asignado = $request->seccion_asignado;
      $estructura->area_id = $request->area_id;
     // $estructura->curriculum = $request->curriculum;
     // $estructura->foto = $request->foto;

            $estructura->save();

if($request->foto){
            $imageName = $estructura->id.'.'.request()->foto->getClientOriginalExtension();
            $path = 'estructura/fotos/';

            request()->foto->move(public_path($path), $imageName);
$estructura->foto = $path.''.$imageName;
            $estructura->save();
}

if($request->curriculum){

$pathCV = 'estructura/curriculums/'; 
               $estructura->curriculum = $pathCV.'curriculum_'.$estructura->id;
    $request->curriculum->storeAS($pathCV, 'curriculum_'.$estructura->id.'.pdf');
                            $estructura->save();


}



        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Miembro  actualizado! ';
        \Session::flash('message', $message);
        return redirect()->route('estructuras.index');
    }


    public function destroy($id)
    {
        Estructura::find($id)->delete();
        $message = 'Estructura eliminado! ';
        \Session::flash('message', $message);
        return json_encode(array('statusCode' => 200));
    }







    public function show($id)
    {

        $estructura = Estructura::findOrFail($id);
        return view('estructuras.show', compact('estructura'));
    }
}
