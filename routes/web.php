<?php

use App\Http\Controllers\ImmigrationServiceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);

Route::get('/about-us', [PageController::class, 'about_us']);

Route::get('/contact-us', [PageController::class, 'contact_us']);

Route::get('/our-products', [PageController::class, 'our_produts']);



Route::get('/immigration-services', [ImmigrationServiceController::class,'page']);

Route::post('/store-immigration-services', [ImmigrationServiceController::class,'store']);

Route::post('/update-immigration-services', [ImmigrationServiceController::class,'update']);

Route::post('/activate', [ImmigrationServiceController::class,'activate']);

Route::post('/update-description', [ImmigrationServiceController::class,'updatedescription']);








