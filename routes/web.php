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
    return view('welcome', ['vehicles' => \App\Models\Vehicle::all()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/monitor', [\App\Http\Controllers\MonitorController::class, 'index'])->name('monitor');
Route::get('/fahrzeuge/{vehicle}', [\App\Http\Controllers\VehicleController::class, 'show'])->name('show-vehicle');
Route::get('/dme/{vehicle}', [\App\Http\Controllers\VehicleController::class, 'dme'])->name('vehicle.dme');

Route::get('/leitstelle', [\App\Http\Controllers\ControlCenterController::class, 'index'])->name('control-center.index')->middleware('auth');
Route::get('/leitstelle/calls/{call}', [\App\Http\Controllers\ControlCenterController::class, 'show'])->name('control-center.show')->middleware('auth');
Route::get('/leitstelle/create', [\App\Http\Controllers\ControlCenterController::class, 'create'])->name('control-center.create')->middleware('auth');
Route::delete('leitstelle/calls/{call}', [\App\Http\Controllers\ControlCenterController::class, 'delete'])->name('control-center.delete')->middleware('auth');
Route::get('/leitstelle/download/{id}', [\App\Http\Controllers\ControlCenterController::class, 'createDispatch'])->name('control-center.download')->middleware('auth');
Route::get('/leitstelle/reset', [\App\Http\Controllers\ControlCenterController::class, 'resetSystem'])->name('control-center.reset')->middleware('auth');
