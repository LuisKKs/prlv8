<?php

use App\Http\Controllers\accModCont;
use App\Http\Controllers\marcaCont;
use App\Http\Controllers\modeloCont;
use App\Http\Controllers\refTelCont;
use App\Http\Controllers\telCont;
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

Route::get('/', function () {return view('welcome');});
Route::resource('mar', marcaCont::class);
Route::resource('acc', accModCont::class);
Route::resource('mod', modeloCont::class);
Route::resource('tel', telCont::class);
Route::resource('ref', refTelCont::class);
Route::get('regmod/{id}', [marcaCont::class, 'registroModeloV']);
Route::get('delvar/{id}', [telCont::class, 'destroyVar']);
Route::get('vervar', [modeloCont::class, 'variantes']);
Route::get('prntmar', [marcaCont::class, 'imprimir']);
Route::get('prnttel', [telCont::class, 'imprimir']);
Route::get('prntref', [refTelCont::class, 'imprimir']);
Route::get('prntacc', [accModCont::class, 'imprimir']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
