<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TicketController;

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
Route::get("/trains", [TrainController::class,"index"])->name("trains");
Route::get("/passengers", [PassengerController::class,"index"])->name("passengers.index");
Route::get("/tickets", [TicketController::class,"index"])->name("tickets.index");
