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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\pacientesController::class, 'index']);

Route::post('/home' , [App\Http\Controllers\pacientesController::class, 'store']);
Route::delete('/eliminar/{id}',[App\Http\Controllers\pacientesController::class, 'destroy']);
Route::get('editar/{id}', [App\Http\Controllers\pacientesController::class, 'show']);
Route::patch('editar/{id}', [App\Http\Controllers\pacientesController::class, 'update']);