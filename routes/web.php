<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create form
Route::get('/register' , [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users' , [UserController::class, 'store'])->middleware('guest');

// Logout User 
Route::post('/logout' , [UserController::class, 'logout'])->middleware('auth');

// Show Login User form 
Route::get('/login' , [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User 
Route::post('/users/authenticate' , [UserController::class, 'authenticate'])->middleware('guest');




