
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CargoController;


//cargo routes

Route::get('cargos', [CargoController::class, 'index'])->name('cargos.index')->middleware('permission:cargos.index');
Route::get('cargos/create', [CargoController::class, 'create'])->name('cargos.create')->middleware('permission:cargos.create');
Route::post('cargos', [CargoController::class, 'store'])->name('cargos.store')->middleware('permission:cargos.create');
Route::get('cargos/{cargo}/edit', [CargoController::class, 'edit'])->name('cargos.edit')->middleware('permission:cargos.edit');
Route::put('cargos/{cargo}', [CargoController::class, 'update'])->name('cargos.update')->middleware('permission:cargos.edit');
Route::get('cargos/{cargo}', [CargoController::class, 'show'])->name('cargos.show')->middleware('permission:cargos.show');
Route::delete('cargos/{cargo}', [CargoController::class, 'destroy'])->name('cargos.destroy')->middleware('permission:cargos.delete');
Route::delete('cargos/delete/{cargo}', [CargoController::class, 'delete'])->name('cargos.delete')->middleware('permission:cargos.delete');
Route::get('cargos/restore/{cargo}', [CargoController::class, 'restore'])->name('cargos.restore')->middleware('permission:cargos.delete');