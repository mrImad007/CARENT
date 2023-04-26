<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
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
Route::middleware(['auth', 'isAdmin'])->group(function () {
//provider dashboard
Route::get('/dashboard',[OffersController::class, 'dashboard']);
//create offer form
Route::get('/addOffer', [OffersController::class, 'createform']);
// save offer 
Route::post('/save', [OffersController::class, 'store']);
// delete offer 
Route::get('/remove/{id}', [OffersController::class, 'DeleteOffer']);
// go to editform 
Route::get('/editOffer', [OffersController::class, 'editForm']);
// save offer edition 
Route::post('/StoreEditOffer/{offer}', [OffersController::class, 'StoreEditOffer']);
// show single offer 
//show confirmed offers
Route::get('/confirmedOffers', [OffersController::class, 'confirmedOffers']);
//confirm offer
Route::get('/ConfirmOffer', [commandController::class, 'ConfirmOffer']);
//Decline offer
Route::get('/DeclineOffer', [commandController::class, 'DeclineOffer']);
//show confirmed offers
Route::get('/pendingOffers', [OffersController::class, 'pendingOffers']);
});
Route::get('/singleOffer', [OffersController::class, 'SingleOffer']);
