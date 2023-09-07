<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\listing;



//index_page
Route::get('/', [ListingController::class, 'index']);
Route::get('/testSite', [ListingController::class, 'testSite']);


//show all listings
Route::get('/listings', [ListingController::class, 'showListings']);

//loginForm
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//registerForm
Route::get('/signup', [UserController::class, 'signup'])->middleware('guest');

//login user
Route::post('/users/login', [UserController::class, 'loginUser']);

//logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//register a new user
Route::post('/users/signup', [UserController::class, 'createUser']);

//create listing by user
Route::get('/listings/create', [ListingController::class, 'createListing'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingController::class, 'manageListing'])->middleware('auth');


//store created listing 
Route::post('/listingscreate', [ListingController::class, 'store']);

//edit a listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//update edited listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete a listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

//show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
