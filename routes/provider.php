<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffersController;

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

//provider dashboard
Route::get('/dashboard',[pagesController::class, 'dashboard'])->middleware(['auth', 'isAdmin']);
//create offer form
Route::get('/addOffer', [OffersController::class, 'createform'])->middleware(['auth', 'isAdmin']);