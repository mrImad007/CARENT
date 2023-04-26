<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\adminsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\commandController;

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

////////////////// Providers \\\\\\\\\\\\\\\\\\\\\\
Route::middleware(['auth', 'super'])->group(function () { 
//provider dashboard
Route::get('/superDash',[adminsController::class, 'SuperDashboard']);
// delete offer 
Route::get('/removeOffer/{id}', [adminsController::class, 'deleteOffer']);
// delete provider 
Route::get('/removeProvider/{id}', [adminsController::class, 'deleteProvider']);
// delete user 
Route::get('/removeUser/{id}', [adminsController::class, 'deleteUser']);

});

