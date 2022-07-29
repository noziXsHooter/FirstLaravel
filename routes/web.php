<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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


Route::get('user/{user}', [UserController::class, 'show']);

Route::get('/', [HomeController::class, 'index'])->name('home');


//SLUG mostra o link separado por '-' //
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

/* Route::get('/', function(){
    $products = Product::all();
    dd($products->toArray());
    return view('home');

}); */

//ADMIN
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.products.store');

Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');



/* Route::prefix('usuarios')->group(function () {
    Route::get('', function () {
        return 'usuario';
    })->name('usuarios');

    Route::get('/{id}', function () {
        return 'Mostrar detalhes';
    })->name('usuarios.show');

    Route::get('/{id}/tags', function () {
        return 'Tags do usuário';
    })->name('usuarios.tags');



});



Route::get('/', function () {
    return view('welcome');
});
 */
