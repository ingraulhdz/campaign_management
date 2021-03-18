
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstructuraController;


//estructura routes

Route::get('estructuras', [EstructuraController::class, 'index'])->name('estructuras.index')->middleware('permission:estructuras.index');
Route::get('estructuras/create', [EstructuraController::class, 'create'])->name('estructuras.create')->middleware('permission:estructuras.create');
Route::post('estructuras', [EstructuraController::class, 'store'])->name('estructuras.store')->middleware('permission:estructuras.create');
Route::get('estructuras/{estructura}/edit', [EstructuraController::class, 'edit'])->name('estructuras.edit')->middleware('permission:estructuras.edit');
Route::put('estructuras/{estructura}', [EstructuraController::class, 'update'])->name('estructuras.update')->middleware('permission:estructuras.edit');
Route::get('estructuras/{estructura}', [EstructuraController::class, 'show'])->name('estructuras.show')->middleware('permission:estructuras.show');
Route::delete('estructuras/{estructura}', [EstructuraController::class, 'destroy'])->name('estructuras.destroy')->middleware('permission:estructuras.delete');
Route::delete('estructuras/delete/{estructura}', [EstructuraController::class, 'delete'])->name('estructuras.delete')->middleware('permission:estructuras.delete');
Route::get('estructuras/restore/{estructura}', [EstructuraController::class, 'restore'])->name('estructuras.restore')->middleware('permission:estructuras.delete');