<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddProductsController;
use App\Http\Controllers\CreateProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;

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
    return view('welcome');
});

Route::resource('/products', ProductController::class);
Route::get('/leads/{id}/add-products', [AddProductsController::class, 'index'])->name('add_products.index');
Route::post('/leads/add-products', [AddProductsController::class, 'store'])->name('add_products.store');
Route::get('/leads/add-products/products_select', [AddProductsController::class, 'show'])->name('products_select.show');

Route::get('/create-profile', [CreateProfileController::class, 'show'])->name('create-profile.show');

Route::post('/create-profile', [CreateProfileController::class, 'store'])->name('create-profile.store');

Route::get('/address', [AddressController::class, 'show']);

Route::get('/leads/financial-information', function () {
    return view('leads.financial_information');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
