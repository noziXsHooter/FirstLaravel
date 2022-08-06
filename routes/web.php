<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminSaleController;

use App\Http\Controllers\SaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use App\Models\Product;
use App\Models\Sale;
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

//ADMIN - PAINEL

Route::get('/admin/painel', [AdminProductController::class, 'show'])->name('admin.painel');




//ADMIN - PRODUCTS
Route::get('/admin/products', [AdminProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::post('/admin/products', [AdminProductController::class, 'store'])->name('admin.products.store');

Route::get('/admin/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/admin/products/{product}', [AdminProductController::class, 'update'])->name('admin.products.update');

Route::delete('/admin/products/{product}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/admin/products/{product}/delete-image', [AdminProductController::class, 'destroyImage'])->name('admin.products.destroyImage');
//OUTRA FORMA DE DELETE
//Route::get('/admin/products/{product}/delete', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');


//ADMIN - SALES
Route::get('/admin/sales', [AdminSaleController::class, 'index'])->name('admin.sales');
Route::get('/admin/sales/create', [AdminSaleController::class, 'create'])->name('admin.sales.create');
Route::post('/admin/sales', [AdminSaleController::class, 'store'])->name('admin.sales.store');

Route::get('/admin/sales/{sale}/edit', [AdminSaleController::class, 'edit'])->name('admin.sales.edit');
Route::put('/admin/sales/{sale}', [AdminSaleController::class, 'update'])->name('admin.sales.update');

Route::delete('/admin/sales/{sale}', [AdminSaleController::class, 'destroy'])->name('admin.sales.destroy');

Route::get('/admin/sales/{sale}/delete-image', [AdminSaleController::class, 'destroyImage'])->name('admin.sales.destroyImage');



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
