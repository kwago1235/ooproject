<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\staffController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [productController::class, 'productDashboard'])->name('productDashboard');
Route::get('/dashboard', [productController::class, 'countProductData'])->name('dashboard');
Route::get('/product/editProduct/{id}', [productController::class, 'edit'])->name('edit');
Route::any('/product/update/{id}', [productController::class, 'update'])->name('update');
Route::get('/product/createProduct', [productController::class, 'create'])->name('create');
Route::post('/product/storeProduct', [productController::class, 'store'])->name('store');
Route::get('/product/delete/{id}', [productController::class, 'destroy'])->name('delete');



Route::get('/staff/delete/{id}', [staffController::class, 'destroy'])->name('staffDelete');
Route::get('/staff/createStaff', [staffController::class, 'create'])->name('createStaff');
Route::post('/staff/addStaff', [staffController::class, 'store'])->name('storeStaff');

Route::resource('/product', productController::class);
Route::resource('/staff', staffController::class);

require __DIR__.'/auth.php';
