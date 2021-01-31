<?php

use App\Http\Controllers\MercanciaController;
use App\Http\Controllers\ClienteController;
use App\Models\Mercancia;
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
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');


//Pagina principal / segunda opcion del menu
Route::get('/principal',[ClienteController::class,'principal'])->name('principal1')->middleware(['auth','rol.cliente']);;

//Ruta para generar el PDF
Route::get('/pdf',[ClienteController::class,'dataModel']);

//Pagina modulo administrador / tercer opcion del menu
Route::get('/moduloadmin',[ClienteController::class,'administracion'])->name('administracion')->middleware(['auth','rol.admin']);


/*CRUD*/

//Pagina almacen / segunda opcion del menu
Route::get('/administracion',[MercanciaController::class,'obtenerProducto'])->name('almacen')->middleware(['auth','rol.empleado']);

Route::get('/elimina/{id}',[MercanciaController::class,'eliminaTrailer']);

Route::get('/edita/{id}',[MercanciaController::class,'editaTrailer']);

Route::post('/actualiza',[MercanciaController::class,'actualizaTrailer'])->name('act.trailer');

Route::get('/agrega',[MercanciaController::class,'reedireccion']);

Route::post('/creardato',[MercanciaController::class,'agregarTrailer'])->name('new.trailer');

Route::get ('/redirectnew',[ClienteController::class,'redirect']);

Route::post('/agregaBasAge',[ClienteController::class,'adminBasAgen'])->name('new.adm');

//Route::get('/administracion/busca',[MercanciaController::class,'buscar']);

//Route::get('/test',[ClienteController::class,'pruebalogin']);

Route::get('/test',[ClienteController::class,'test']);






