<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{


    public function index()
    {
        $cargos = Cargo::orderBy('id', 'ASC')->get();
        return view('cargos.index', compact('cargos'));
    }



    public function create()
    {
        return view('cargos.create');
    }


    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',
            'descripcion' => 'required|min:2|max:244',



        ]);
        try {


            $cargo = new Cargo($request->all());

            $cargo->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'El Cargo ha sido creado.';
        \Session::flash('message', $message);
        return redirect()->route('cargos.index');
    }




    public function edit($id)
    {
        $cargo = Cargo::findOrFail($id);
        return view('cargos.edit', compact('cargo'));
    }


    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'nombre' => 'required|min:2|max:244',
            'descripcion' => 'required|min:2|max:244',


        ]);
        try {
            $cargo = Cargo::findOrFail($id);
            $cargo->fill($request->all());
            $cargo->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Cargo actualizado! ';
        \Session::flash('message', $message);
        return redirect()->route('cargos.index');
    }


    public function destroy($id)
    {
        Cargo::find($id)->delete();
        $message = 'Cargo eliminado! ';
        \Session::flash('message', $message);
        return json_encode(array('statusCode' => 200));
    }







    public function show($id)
    {

        $cargo = Cargo::findOrFail($id);
        return view('cargos.show', compact('cargo'));
    }
}
