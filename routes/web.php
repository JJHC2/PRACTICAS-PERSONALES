<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\inventoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\type_usersController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\EstadosController;
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

/*PROD */
Route::resource('products',ProductsController::class);
/*CATEGORIAS */
Route::resource('categories',CategoriesController::class);

/*INVENTORY */
Route::resource('inventories',inventoriesController::class);
/*USUARIOS */
Route::resource('usuarios',usuariosController::class);
/*Type User */
Route::resource('type_user',type_usersController::class);
/* Estados */
Route::resource('estados', EstadosController::class);
/* Municipios */
Route::resource('municipios', MunicipiosController::class);