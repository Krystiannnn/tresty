<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'showHome'])->name('showHome');

Route::get('/page/authors', [ProductController::class, 'authors'])->name('authors');

Route::get('/page/items', [ProductController::class, 'products'])->name('products');

Route::get('/page/type', [ProductController::class, 'type'])->name('type');

Route::get('/page/add_product', [AddProductController::class, 'addproduct'])->name('addproduct');

Route::post('/page/add_product', [AddProductController::class, 'addDb'])->name('addDb');

//Route::middleware('auth')->group(function () {
    Route::get('/users', [UsersController::class, 'show'])->name('show');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

