<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{


    public function index()
    {
        $personas = Persona::orderBy('id', 'ASC')->get();
        return view('personas.index', compact('personas'));
    }



    public function create()
    {
        return view('personas.create');
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

            

            

            $persona = new Persona();
      $persona->nombre = $request->nombre;
       $persona->apellido_paterno = $request->apellido_paterno;
    $persona->apellido_materno = $request->apellido_materno;
      $persona->fecha_nacimiento = $request->fecha_nacimiento;
      $persona->curp = $request->curp;
      $persona->clave_electoral = $request->clave_electoral;
      $persona->calle = $request->calle;
      $persona->numero_exterior = $request->numero_exterior;
      $persona->numero_interior = $request->numero_interior;
      $persona->estado_id = $request->estado_id;
      $persona->municipio_id = $request->municipio_id;
      $persona->localidad_id = $request->localidad_id;
      $persona->distrito_federal_id = $request->distrito_federal_id;
      $persona->distrito_local_id = $request->distrito_local_id;
      $persona->seccion_id = $request->seccion_id;
      $persona->telefono_celular = $request->telefono_celular;
      $persona->telefono_casa = $request->telefono_casa;
      $persona->email = $request->email;
      $persona->facebook = $request->facebook;
      $persona->twitter = $request->twitter;
      $persona->instagram = $request->instagram;
      $persona->nivel_academico_id= $request->nivel_academico;
      $persona->area_profesional_id = $request->area_profesional_id;
      $persona->actividad_actual = $request->actividad_actual;
    //   $persona->cargo_campana_id = $request->cargo_campana_id;
    //   $persona->area_id = $request->area_id;
    //   $persona->distrito_federal_asignado = $request->distrito_federal_asignado;
    //   $persona->distrito_local_asignado = $request->distrito_local_asignado;
    //   $persona->seccion_asignado = $request->seccion_asignado;
    //   $persona->area_id = $request->area_id;
     // $persona->curriculum = $request->curriculum;
     // $persona->foto = $request->foto;

            $persona->save();

if($request->foto){
            $imageName = $persona->id.'.'.request()->foto->getClientOriginalExtension();
            $path = 'public/personas/fotos/';

            request()->foto->move(public_path($path), $imageName);
$persona->foto = $path.''.$imageName;
            $persona->save();
}

if($request->curriculum){

$pathCV = 'personas/curriculums/'; 
               $persona->curriculum = $pathCV.'curriculum_'.$persona->id;
    $request->curriculum->storeAS($pathCV, 'curriculum_'.$persona->id.'.pdf');
                            $persona->save();


}
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'El Amigo ha sido creado.';
        \Session::flash('message', $message);
        return redirect()->route('personas.index');
    }




    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',


        ]);
        try {
        $persona = Persona::findOrFail($id);
        
      $persona->nombre = $request->nombre;
       $persona->apellido_paterno = $request->apellido_paterno;
      $persona->apellido_materno = $request->apellido_materno;
      $persona->fecha_nacimiento = $request->fecha_nacimiento;
      $persona->curp = $request->curp;
      $persona->clave_electoral = $request->clave_electoral;
      $persona->calle = $request->calle;
      $persona->numero_exterior = $request->numero_exterior;
      $persona->numero_interior = $request->numero_interior;
      $persona->estado_id = $request->estado_id;
      $persona->municipio_id = $request->municipio_id;
      $persona->localidad_id = $request->localidad_id;
      $persona->distrito_federal_id = $request->distrito_federal_id;
      $persona->distrito_local_id = $request->distrito_local_id;
      $persona->seccion_id = $request->seccion_id;
      $persona->telefono_celular = $request->telefono_celular;
      $persona->telefono_casa = $request->telefono_casa;
      $persona->email = $request->email;
      $persona->facebook = $request->facebook;
      $persona->twitter = $request->twitter;
      $persona->instagram = $request->instagram;
      $persona->nivel_academico_id = $request->nivel_academico;
      $persona->area_profesional_id = $request->area_profesional_id;
      $persona->actividad_actual = $request->actividad_actual;

     // $persona->curriculum = $request->curriculum;
     // $persona->foto = $request->foto;

            $persona->save();

if($request->foto){
            $imageName = $persona->id.'.'.request()->foto->getClientOriginalExtension();
            $path = 'personas/fotos/';

            request()->foto->move(public_path($path), $imageName);
$persona->foto = $path.''.$imageName;
            $persona->save();
}

if($request->curriculum){

    $pathCV = 'public/personas/curriculums/'; 
    $persona->curriculum = $pathCV.'curriculum_'.$persona->id;
    $request->curriculum->storeAS($pathCV, 'curriculum_'.$persona->id.'.pdf');
    $persona->save();


}



        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Amigo  actualizado! ';
        \Session::flash('message', $message);
        return redirect()->route('personas.index');
    }


    public function destroy($id)
    {
        Persona::find($id)->delete();
        $message = 'Persona eliminado! ';
        \Session::flash('message', $message);
        return json_encode(array('statusCode' => 200));
    }







    public function show($id)
    {

        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }
}
