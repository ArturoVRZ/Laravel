<?php

use App\Http\Controllers\Crud\CrudController;
use App\Http\Controllers\Post\PostController;
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
//para llamar un controlador
Route::get('/', [PostController::class, 'index']);
Route::get('/layout', function () {
    return view('layouts.layoutIndex');
});

//ruta de tipo recurso para CRUD
Route::resource('post',CrudController::class);
/* agrega todas estas rutas las puedo ver en php artisan route:list
Route::get('post',[CrudController::class,'index']);
Route::get('post/create',[CrudController::class,'create']);
Route::get('post/{post}',[CrudController::class,'show']);
Route::get('post/{post}/edit',[CrudController::class,'edit']);

Route::post('post',[CrudController::class,'store']);
Route::put('post/{post}',[CrudController::class,'update']);
Route::delete('post/{post}',[CrudController::class,'destroy']);
*/