<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //         $role = Role::create(['name' => 'writer']);
        //         $permission = Permission::create(['name' => 'edit articles']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        // $role->revokePermissionTo($permission);
        // $permission->removeRole($role);
        $permissions = Permission::orderBy('id', 'ASC')->get();

        return view('auth.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'front_name' => 'required|min:2|max:244',
            'description' => 'required|min:5|max:244',
        ]);
        try {

            $permission = new Permission($request->all());
            $permission->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'The Role was created!.';
        \Session::flash('message', $message);
        return redirect()->route('permissions.index');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('auth.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('auth.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $data = $this->validate(request(), [
            'front_name' => 'required|min:2|max:244',
            'description' => 'required|min:5|max:244',

        ]);
        try {
            $permission = Permission::findOrFail($id);
            $permission->fill($request->all());
            $permission->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Permission updated! ';
        \Session::flash('message', $message);
        return redirect()->route('permissions.index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {

        $permission = Permission::find($id)->delete();
        $message = 'Permission deleted! ';

        \Session::flash('message', $message);

        return back()->with('success', $message);
    }
}
