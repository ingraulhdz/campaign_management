

<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('estado-municipios/{estado}', [App\Http\Controllers\EstructuraController::class, 'getMunicipios'])->name('getMunicipios');
Route::get('municipio-localidades/{municipio}', [App\Http\Controllers\EstructuraController::class, 'getLocalidades'])->name('getLocalidades');
Route::get('distritoFederal-distritosLocales/{distritoFederal}', [App\Http\Controllers\EstructuraController::class, 'getDistritosLocales'])->name('getDistritosLocales');
Route::get('distritoLocal-secciones/{distritoLocal}', [App\Http\Controllers\EstructuraController::class, 'getSecciones'])->name('getSecciones');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);


Route::middleware(['auth'])->group(function () {
    //routes with auth 


    require __DIR__ . '/RoutesModules.php';
});



Route::get('/bk', function () {
    return back();
});
