
<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


//user routes

Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware('permission:users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create')->middleware('permission:users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store')->middleware('permission:users.create');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('permission:users.edit');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('permission:users.show');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('permission:users.delete');
Route::delete('users/delete/{user}', [UserController::class, 'delete'])->name('users.delete')->middleware('permission:users.delete');
Route::get('users/restore/{user}', [UserController::class, 'restore'])->name('users.restore')->middleware('permission:users.delete');