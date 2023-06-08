<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/leitstelle', [\App\Http\Controllers\ControlCenterController::class, 'index'])->name('control-center.index');
Route::get('/leitstelle/calls/{call}', [\App\Http\Controllers\ControlCenterController::class, 'show'])->name('control-center.show');
Route::get('/leitstelle/create', [\App\Http\Controllers\ControlCenterController::class, 'create'])->name('control-center.create');
Route::delete('leitstelle/calls/{call}', [\App\Http\Controllers\ControlCenterController::class, 'delete'])->name('control-center.delete');
Route::get('/leitstelle/download/{id}', [\App\Http\Controllers\ControlCenterController::class, 'createDispatch'])->name('control-center.download');
Route::get('/monitor', [\App\Http\Controllers\MonitorController::class, 'index'])->name('monitor');
Route::get('/fahrzeuge/{vehicle}', [\App\Http\Controllers\VehicleController::class, 'show'])->name('show-vehicle');
