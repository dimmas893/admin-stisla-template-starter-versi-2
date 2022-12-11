<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::post('/user/store', [App\Http\Controllers\userController::class, 'store'])->name('user-store');
Route::get('/user/all', [App\Http\Controllers\userController::class, 'all'])->name('user-all');
Route::get('/user/edit', [App\Http\Controllers\userController::class, 'edit'])->name('user-edit');
Route::post('/user/update', [App\Http\Controllers\userController::class, 'update'])->name('user-update');
Route::delete('/user/delete', [App\Http\Controllers\userController::class, 'delete'])->name('user-delete');


require __DIR__.'/auth.php';
