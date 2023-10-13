<?php

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
    //echo "hola mundo";
    //echo "<h1>hola mundo </h1>";
    return view('welcome');
});
//variar la url
Route::get('/bienvenida', function () {
    $mensj = "mensaje desde servidor";
    return view('bienvenida', ['msj' => $mensj]);
});
Route::get('/contactame', function () {
    $mensj = "contacto";
    return view('contacto', ['msj' => $mensj]);
})->name('contacto');