<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{


    public function index()
    {
        $grupos = Grupo::orderBy('id', 'ASC')->get();
        return view('grupos.index', compact('grupos'));
    }



    public function create()
    {
        return view('grupos.create');
    }


    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',
            'descripcion' => 'required|min:2|max:244',



        ]);
        try {


            $grupo = new Grupo($request->all());

            $grupo->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'El Grupo ha sido creado.';
        \Session::flash('message', $message);
        return redirect()->route('grupos.index');
    }




    public function edit($id)
    {
        $grupo = Grupo::findOrFail($id);
        return view('grupos.edit', compact('grupo'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',
            'descripcion' => 'required|min:2|max:244',


        ]);
        try {
            $grupo = Grupo::findOrFail($id);
            $grupo->fill($request->all());
            $grupo->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Grupo actualizado! ';
        \Session::flash('message', $message);
        return redirect()->route('grupos.index');
    }


    public function destroy($id)
    {
        Grupo::find($id)->delete();
        $message = 'Grupo eliminado! ';
        \Session::flash('message', $message);
        return json_encode(array('statusCode' => 200));
    }







    public function show($id)
    {

        $grupo = Grupo::findOrFail($id);
        return view('grupos.show', compact('grupo'));
    }
}
