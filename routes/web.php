<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecyclebinController;
use App\Http\Controllers\SensorDataController;



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

Route::resource('recyclebin', RecyclebinController::class);

Route::post('sensordata/{recyclebin}', [SensorDataController::class,'store']);

Route::get('sensordata/{recyclebin}', [SensorDataController::class,'showSensorPerPin']);





