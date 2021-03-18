
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GrupoController;


//grupo routes

Route::get('grupos', [GrupoController::class, 'index'])->name('grupos.index')->middleware('permission:grupos.index');
Route::get('grupos/create', [GrupoController::class, 'create'])->name('grupos.create')->middleware('permission:grupos.create');
Route::post('grupos', [GrupoController::class, 'store'])->name('grupos.store')->middleware('permission:grupos.create');
Route::get('grupos/{grupo}/edit', [GrupoController::class, 'edit'])->name('grupos.edit')->middleware('permission:grupos.edit');
Route::put('grupos/{grupo}', [GrupoController::class, 'update'])->name('grupos.update')->middleware('permission:grupos.edit');
Route::get('grupos/{grupo}', [GrupoController::class, 'show'])->name('grupos.show')->middleware('permission:grupos.show');
Route::delete('grupos/{grupo}', [GrupoController::class, 'destroy'])->name('grupos.destroy')->middleware('permission:grupos.delete');
Route::delete('grupos/delete/{grupo}', [GrupoController::class, 'delete'])->name('grupos.delete')->middleware('permission:grupos.delete');
Route::get('grupos/restore/{grupo}', [GrupoController::class, 'restore'])->name('grupos.restore')->middleware('permission:grupos.delete');