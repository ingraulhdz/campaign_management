<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles = Role::orderBy('id', 'ASC')->get();
        return view('auth.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.roles.create');
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
        'name' => 'required|min:2|max:244',
        'guard_name' => 'required|min:5|max:244',
  ]);
		try{

			$Role = new Role($request->all());
			$Role->save();

 		}catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        	}

            $message ='The Role was created!.';
            \Session::flash('message',$message);
             return redirect()->route('roles.index');
	}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return view('auth.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {

        $role = Role::findOrFail($id);
        $permissions = Permission::get();

        $permissionsNames =  \DB::table('permissions')
        ->select(\DB::raw('model'))
        ->where('id', '<>', 1)
        ->groupBy('model')
        ->get();
			return view('auth.roles.edit', compact('role', 'permissions', 'permissionsNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	public function update(Request $request,$id)
	{
      
    try{
            $role= Role::findOrFail($id);
            $role->syncPermissions($request->per);

                        }catch(\Exception $e){

                            $messageError = "Someting is worng: ".$e->getMessage();
                            \Session::flash('error',$messageError);
                            return \Redirect::back()->withInput()->withErrors($messageError);
                            }
        $message ='Role updated! ';
	 	\Session::flash('message',$message);
        return redirect()->route('roles.index');
	}




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    public function destroy($id)
{

 $role = Role::find($id)->delete();
 $message ='Role deleted! ';

        \Session::flash('message',$message);

 return back()->with('success', $message);

}



   
}
