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


////////////////// user \\\\\\\\\\\\\\\\\\\\\\

// home page 
Route::get('/',[pagesController::class, 'index']);
// marketplace page 
Route::get('/market',[pagesController::class, 'market']);
// support page 
Route::get('/blog', [pagesController::class, 'blog']);
// register form
Route::get('/register', [UsersController::class, 'create'])->middleware('guest');
// store client data
Route::post('/store', [UsersController::class, 'store']);
// login form
Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');
// log in user
Route::post('/users/authentification' , [UsersController::class , 'authentification']);
// log out
Route::get('/logout', [UsersController::class, 'logout']);


////////////////// auth part \\\\\\\\\\\\\\\\\\\\\\
Route::middleware(['auth'])->group(function () { 
    // user Cart
    Route::get('/cart',[pagesController::class, 'cart']);
    // user Confirmed
    Route::get('/UserConfirmed',[pagesController::class, 'Confirmedcart']);
    // edit profile 
    Route::get('/edit-profile', [UsersController::class, 'editProfile']);
    // save profile edition
    Route::post('/saveEdit/{user}', [UsersController::class, 'saveEditProfile']);
    //order a selling offer
    Route::get('/order', [commandController::class, 'createCommand']);
    //order a rental offer
    Route::get('/orderRent', [commandController::class, 'createRentCommand']);
    //order a car
    Route::get('/DeclineOfferCart', [commandController::class, 'DeclineOfferCart']);
    //single offer page
    Route::get('/singleOffer', [OffersController::class, 'SingleOffer']);   
});


////////////////// search \\\\\\\\\\\\\\\\\\\\\\
// regular saerch 
Route::get('/search', [OffersController::class, 'search']);
// search by category 
Route::get('/category-search', [OffersController::class, 'categorySearch']);
// search by offer type 
Route::get('/offertype-search', [OffersController::class, 'offerTypeSearch']);

