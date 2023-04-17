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


////////////////// user \\\\\\\\\\\\\\\\\\\\\\
// home page that load recent play
Route::get('/',[pagesController::class, 'index']);
// marketplace page 
Route::get('/market',[pagesController::class, 'market']);
// user Cart
Route::get('/cart',[pagesController::class, 'cart']);
// admin dashboard 
Route::get('/dashboard',[pagesController::class, 'dashboard']);
// blog page 
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

Route::post('/save', [OffersController::class, 'store']);

Route::get('/addOffer', [OffersController::class, 'createform']);

Route::get('/test', function(){
    return view('lll');
});
