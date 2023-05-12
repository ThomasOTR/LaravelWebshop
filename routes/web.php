<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Product;
use App\Models\Collection;

use Illuminate\Support\Facades\Redirect;
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
    $products = Product::all()->take(4);
    $collections = Collection::all()->take(4);
    return view('index',['products'=>$products,'collections'=>$collections]);
})->name('index');

/* Routes related to products */
Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/product/{product}',[ProductController::class,'show'])->name('product.show');

/* Routes related to products */
Route::get('/collections',[CollectionController::class,'index'])->name('collection.index');
Route::get('/collection/{collection}',[CollectionController::class,'show'])->name('collection.show');

/* Profile routes */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* Admin routes */
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', function () {  return view('admin.index'); })->name('admin.index');
    Route::get('/users', function () { return view('admin.users',['users'=> User::whereHasRole('user')->get()]); })->name('admin.users');
    Route::get('/products',[ProductController::class,'index'])->name('admin.products');
    Route::get('/collections',[CollectionController::class,'index'])->name('admin.collections');

    Route::get('/product/new', [ProductController::class, 'create'])->name('product.new');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/collection/new', [CollectionController::class, 'create'])->name('collection.new');
    Route::post('/collection/store', [CollectionController::class, 'store'])->name('collection.store');
    Route::get('/collection/edit/{collection}', [CollectionController::class, 'edit'])->name('collection.edit');
    Route::patch('/collection/{collection}', [CollectionController::class, 'update'])->name('collection.update');
    Route::delete('/collection/{collection}', [CollectionController::class, 'destroy'])->name('collection.destroy');

    Route::delete('/users/{user}',function (User $user){
        $user->delete();
        return Redirect::route('admin.users');
    })->name('user.destroy');
});

require __DIR__.'/auth.php';
