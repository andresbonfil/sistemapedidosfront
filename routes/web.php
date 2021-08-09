<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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

Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('registrarse', function () { return view('registrarse'); })->name('registrarse');
Route::get('recontra', function () { return view('recontra'); })->name('recontra');


Route::post('registrarse', [InicioController::class, 'registrarsePost'])->name('registrarsePost');
Route::post('recontraPost', [InicioController::class, 'recontraPost'])->name('recontraPost');