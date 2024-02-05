<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexAlumnos', [AlumnoController::class, 'index'])
    ->name('AlumnoIndex');

Route::get('/editAlumnos/{id}', [AlumnoController::class, 'edit'])
    ->name('AlumnoEdit');

Route::put('{id}', [AlumnoController::class, 'update'])
    ->name('AlumnoUpdate');

Route::get('{id}/verd', [AlumnoController::class, 'irdestroy'])
    ->name('irdelete');

Route::delete('{id}', [AlumnoController::class, 'destroy'])
    ->name('AlumnoDelete');

Route::get('/createAlumnos',[AlumnoController::class, 'create'])
    ->name('AlumnoCreate');

Route::post('/storeAlumnos',[AlumnoController::class, 'store'])
    ->name('AlumnoStore');

Route::get('{id}/showAlumnos',[AlumnoController::class, 'show'])
    ->name('AlumnoShow');

Route::get('{id}/enseniarProfesores',[ProfesorController::class, 'enseniar'])
    ->name('ProfesorEnseniar');


Route::resource('profesor', ProfesorController::class);
Route::resource('curso', CursoController::class);
