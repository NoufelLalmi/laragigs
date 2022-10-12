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
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create form
Route::get('/register' , [UserController::class, 'create']);

// Create New User
Route::post('/users' , [UserController::class, 'store']);

// Logout User 
Route::post('/logout' , [UserController::class, 'logout']);

// Show Login User form 
Route::get('/login' , [UserController::class, 'login']);

// Login User 
Route::post('/users/authenticate' , [UserController::class, 'authenticate']);




