<?php

use App\Http\Controllers\DocDocumentoController;
use App\Http\Controllers\ProProcesoController;
use App\Http\Controllers\TipTipoDocController;
use GuzzleHttp\Middleware;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Rutas De Documentos

Route::get('/Doc_Documento',                        [DocDocumentoController::class, 'index'])->middleware('auth')->name('index.Doc_Documento');
Route::get('/Doc_Documento/agregar',                [DocDocumentoController::class, 'create'])->middleware('auth')->name('create.Doc_Documento');
Route::post('Doc_Documento/store',                  [DocDocumentoController::class, 'store'])->middleware('auth')->name('store.Doc_Documento');
Route::post('/Doc_Documento/edit/{doc_Documento}',   [DocDocumentoController::class, 'edit'])->middleware('auth')->name('edit.Doc_Documento');
Route::put('/Doc_Documento/edit/{doc_Documento}',   [DocDocumentoController::class, 'update'])->middleware('auth')->name('update.Doc_Documento');
Route::delete('/Doc_Documento/{oc_Documento}',     [DocDocumentoController::class, 'destroy'])->middleware('auth')->name('destroy.Doc_Documento');

// Rutas De Procesos

Route::get('/Pro_Proceso',                          [ProProcesoController::class, 'index'])->middleware('auth')->name('index.Pro_Proceso');
Route::get('/Pro_Proceso/agregar',                  [ProProcesoController::class, 'create'])->middleware('auth')->name('create.Pro_Proceso');
Route::post('Pro_Proceso/store',                    [ProProcesoController::class, 'store'])->middleware('auth')->name('store.Pro_Proceso');
Route::get('/Pro_Proceso/edit/{pro_Proceso}',       [ProProcesoController::class, 'edit'])->middleware('auth')->name('edit.Pro_Proceso');
Route::put('/Pro_Proceso/edit/{pro_Proceso}',       [ProProcesoController::class, 'update'])->middleware('auth')->name('update.Pro_Proceso');
Route::delete('/Pro_Proceso/{pro_Proceso}',         [ProProcesoController::class, 'destroy'])->middleware('auth')->name('destroy.Pro_Proceso');

// Rutas De Tip Tipo Doc

Route::get('/Tip_Tipo_Doc',                         [TipTipoDocController::class, 'index'])->middleware('auth')->name('index.Tip_Tipo_Doc');
Route::get('/Tip_Tipo_Doc/agregar',                 [TipTipoDocController::class, 'create'])->middleware('auth')->name('create.Tip_Tipo_Doc');
Route::post('Tip_Tipo_Doc/store',                   [TipTipoDocController::class, 'store'])->middleware('auth')->name('store.Tip_Tipo_Doc');
Route::get('/Tip_Tipo_Doc/edit/{tip_Tipo_Doc}',     [TipTipoDocController::class, 'edit'])->middleware('auth')->name('edit.Tip_Tipo_Doc');
Route::put('/Tip_Tipo_Doc/edit/{tip_Tipo_Doc}',     [TipTipoDocController::class, 'update'])->middleware('auth')->name('update.Tip_Tipo_Doc');
Route::delete('/Tip_Tipo_Doc/{tip_Tipo_Doc}',       [TipTipoDocController::class, 'destroy'])->middleware('auth')->name('destroy.Tip_Tipo_Doc');
