<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\HomepageController;

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

// HomePage Related Route
Route::get('/', [HomepageController::class, 'viewHomePage']);
// Route::get('/', [HomepageController::class, 'homeContent']);


// Authentication Related Route
Route::post('/registersave', [AuthController::class, 'registersave']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginsave', [AuthController::class, 'loginsave']);
Route::post('/logout', [AuthController::class, 'logout']);


// CRUD RELATED ROUTE
Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('user/create_user', [UserController::class, 'create_user']);
Route::post('/store', [UserController::class, 'store']); 
Route::get('user_details/{id}/edit', [UserController::class, 'edit']);
Route::put('user_details/{id}/update', [UserController::class, 'update']);
Route::get('user_details/{id}/delete', [UserController::class, 'destroy']);


// Career RELATED ROUTE
Route::get('/career', [OtherController::class, 'viewCareerPage']);
Route::post('/storeCareerApplication', [OtherController::class, 'storeCareerApplication']);

// Blog RELATED ROUTE
Route::get('/blogPage', [OtherController::class, 'blogPage']);

// Contact Us RELATED ROUTE
Route::get('/contact', [OtherController::class, 'contact']);
Route::post('/submitcontact', [OtherController::class, 'submitcontact']);

// Gallery Route
Route::get('/gallery', [OtherController::class, 'viewGallery']);
