<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


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

//All Listings
Route::get('/',[ListingController::class, 'index']);

// Manage Listings
Route::get('/listing/manage',[ListingController::class,'manage'])->middleware('auth');

// Show create Form
Route::get('/listing/create',[ListingController::class, 'create'])->middleware('auth');

// store listing
Route::post('/listing',[ListingController::class,'store'])->middleware('auth');

//edit listing
Route::get('/listing/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//update listing
Route::put('/listing/{listing}',[ListingController::class,'update'])->middleware('auth');

//delete listing
Route::delete('/listing/{listing}',[ListingController::class,'destroy'])->middleware('auth');

// Signle Listing
Route::get('/listing/{listing}',[ListingController::class,'show']);

//show register form
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//create new user
Route::post('/users',[UserController::class,'store']);

//logout user
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

//show login form
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//Log in user
Route::post('/users/authenticate',[UserController::class,'authenticate']);







//Common resource Routes:
// index - show all listing
// show - show single listing
// create -  show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing









// Route::get('/hello', function(){
//     return 'hello world';
// });

// Route::get('/post/{id}',function($id){
//     return response('Post ' . $id);
// })->where('id','[0-9]+');

// Route::get('/search',function (Request $request){
//     return ($request->name .' '. $request->city);
// });
