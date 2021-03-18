
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;


//persona routes

Route::get('personas', [PersonaController::class, 'index'])->name('personas.index')->middleware('permission:personas.index');
Route::get('personas/create', [PersonaController::class, 'create'])->name('personas.create')->middleware('permission:personas.create');
Route::post('personas', [PersonaController::class, 'store'])->name('personas.store')->middleware('permission:personas.create');
Route::get('personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit')->middleware('permission:personas.edit');
Route::put('personas/{persona}', [PersonaController::class, 'update'])->name('personas.update')->middleware('permission:personas.edit');
Route::get('personas/{persona}', [PersonaController::class, 'show'])->name('personas.show')->middleware('permission:personas.show');
Route::delete('personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy')->middleware('permission:personas.delete');
Route::delete('personas/delete/{persona}', [PersonaController::class, 'delete'])->name('personas.delete')->middleware('permission:personas.delete');
Route::get('personas/restore/{persona}', [PersonaController::class, 'restore'])->name('personas.restore')->middleware('permission:personas.delete');