<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ExportadorController;
use App\Http\Controllers\ImportadorController;
use App\Http\Controllers\AgenteAduanalExportacionController;
use App\Http\Controllers\AgenteAduanalImportacionController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EmpresaRecolectoraController;
use App\Http\Controllers\EmpresaCargaController;

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
    return view('inicio');
});
/*Route::get('/servicios', function () {
    return view('servicio');
}); */
//Empleados
/*Route::get('/empleados', function () {
    return view('empleado.index');
});
Route::get('/empleados/create', [EmpleadoController::class, 'create']);
*/
Route::get('findEmpresa', [EmpresaRecolectoraController::class, 'getEmpresa']);
Route::get('findEmpresaCarga', [EmpresaCargaController::class, 'getEmpresa']);
Route::get('findExportador', [ExportadorController::class, 'getEmpresa']);
Route::get('findAgAdExportacion', [AgenteAduanalExportacionController::class, 'getEmpresa']);
Route::get('findImportador', [ImportadorController::class, 'getEmpresa']);
Route::get('findAgAdEImportacion', [AgenteAduanalImportacionController::class, 'getEmpresa']);
Route::resource('empleados', EmpleadoController::class);
Route::resource('exportador', ExportadorController::class);
Route::resource('importador', ImportadorController::class);
Route::resource('ag_ad_exportacion', AgenteAduanalExportacionController::class);
Route::resource('ag_ad_importacion', AgenteAduanalImportacionController::class);
Route::resource('serie', SerieController::class);
Route::resource('servicios', ServicioController::class);

