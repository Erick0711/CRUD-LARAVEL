<?php

use App\Http\Controllers\ProjectoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProjectoController::class, 'index'])->name('registro');
Route::get('/registro/create',[ProjectoController::class, 'create'])->name('registro.create');
Route::post('/registro/store',[ProjectoController::class, 'store'])->name('registro.store');

Route::get('/registro/{id}/edit',[ProjectoController::class, 'edit'])->name('registro.edit');
Route::put('/registro/{id}/update',[ProjectoController::class, 'update'])->name('registro.update');

Route::delete('/registro/{id}',[ProjectoController::class, 'destroy'])->name('registro.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
