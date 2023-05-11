<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    return view('index');
})->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/users', [AdminController::class,'users'])->name('admin.users');
    Route::get('/products',[AdminController::class,'products'])->name('admin.products');
    Route::delete('/products',[AdminController::class,'destroy_product'])->name('admin.products.destroy');
    Route::delete('/users',[AdminController::class,'destroy_user'])->name('admin.users.destroy');
});

require __DIR__.'/auth.php';
