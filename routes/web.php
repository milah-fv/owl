<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ExportadorController;
use App\Http\Controllers\ImportadorController;
use App\Http\Controllers\AgenteAduanalExportacionController;
use App\Http\Controllers\AgenteAduanalImportacionController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EmpresaTransporteController;
use App\Http\Controllers\DescripcionMercaderiaController;
use App\Http\Controllers\TransporteController;
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
})->middleware('auth');

/*Route::get('/servicios', function () {
    return view('servicio');
}); */
//Empleados
/*Route::get('/empleados', function () {
    return view('empleado.index');
});
Route::get('/empleados/create', [EmpleadoController::class, 'create']);
*/
Route::get('findEmpresa', [EmpresaTransporteController::class, 'getEmpresa']);
Route::get('findDescMerc', [DescripcionMercaderiaController::class, 'getDescripcionMercaderia']);
Route::get('findExportador', [ExportadorController::class, 'getEmpresa']);
Route::get('findAgAdExportacion', [AgenteAduanalExportacionController::class, 'getEmpresa']);
Route::get('findImportador', [ImportadorController::class, 'getEmpresa']);
Route::get('findAgAdImportacion', [AgenteAduanalImportacionController::class, 'getEmpresa']);
Route::get('findTransporte', [TransporteController::class, 'getTransporte']);
Route::resource('empleados', EmpleadoController::class);

Route::resource('exportador', ExportadorController::class);
Route::resource('importador', ImportadorController::class);
Route::resource('ag_ad_exportacion', AgenteAduanalExportacionController::class);
Route::resource('ag_ad_importacion', AgenteAduanalImportacionController::class);
Route::resource('serie', SerieController::class);
Route::resource('servicios', ServicioController::class);
Route::resource('empresa', EmpresaTransporteController::class);
Route::resource('transporte', TransporteController::class);
Route::resource('descmercaderia', DescripcionMercaderiaController::class);
//Route::resource('empresa', EmpresaTransporteController::class);
//Route::post('/empresa', [EmpresaTransporteController::class, 'store']);
Route::get('empresaJson',[EmpresaTransporteController::class, 'datatableEmpresas']);
Route::get('servicioJson',[ServicioController::class, 'datatableServicios']);
Route::get('servicios/instrucciones/pdf/{id}', [ServicioController::class, 'pdfInstrucciones'])->name('pdf_instrucciones');
Route::get('servicios/porte/pdf/{id}', [ServicioController::class, 'pdfPorte'])->name('pdf_porte');
Route::get('servicios/manifiesto/pdf/{id}', [ServicioController::class, 'pdfManifiesto'])->name('pdf_manifiesto');

Route::get('info', function () {
    return view('info');
});


Auth::routes();

Route::get('/home', function () {
    return view('inicio');
})->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
