<?php

use App\Http\Controllers\CreateProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('leads');
});

Route::resource('/products', ProductController::class);

Route::get('/create-profile', [CreateProfileController::class, 'show'])->name('create-profile.show');

Route::post('/create-profile', [CreateProfileController::class, 'store'])->name('create-profile.store');

Route::get('/address', function () {
    return view('address');
});
