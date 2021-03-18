<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;



use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $users = User::orderBy('id', 'ASC')->get();
        return view('auth.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $permissions = Permission::get();
        return view('auth.users.create', compact('roles', 'permissions'));
    }



    public function store(Request $request)
    {
        $data = $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        try {

            $user =   User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole('guest');
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }

        $message = 'The Role was created!.';
        \Session::flash('message', $message);
        return redirect()->route('users.index');
    }




    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('auth.users.show', compact('user'));
    }

    public function edit($id)
    {

        $user = User::findOrFail($id);
        $roles = Role::get();
        $permissions = Permission::get();

        $permissionsNames =  \DB::table('permissions')
            ->select(\DB::raw('model'))
            ->where('id', '<>', 1)
            ->groupBy('model')
            ->get();
        return view('auth.users.edit', compact('user', 'permissions', 'roles', 'permissionsNames'));
    }


    public function update(Request $request, $id)
    {

        $data = $this->validate(request(), [
            'name' => 'required|min:2|max:244',
            'email' => 'required|min:5|max:244',

        ]);
        try {
            $user = User::findOrFail($id);
            $rol = $user->roles[0]->name;
            $user->removeRole($rol);
            $user->assignRole($request->role);

            $user->syncPermissions($request->per);

            $user->fill($request->all());
            $user->save();
        } catch (\Exception $e) {

            $messageError = "Someting is worng: " . $e->getMessage();
            \Session::flash('error', $messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        }
        $message = 'Role updated! ';
        \Session::flash('message', $message);
        return redirect()->route('users.index');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {

        $user = User::find($id)->delete();
        $message = 'user deleted! ';

        \Session::flash('message', $message);

        return back()->with('success', $message);
    }
}
