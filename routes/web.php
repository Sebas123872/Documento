<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BalanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí puedes registrar las rutas web de tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider y están
| dentro del grupo "web middleware group", que incluye sesión y CSRF.
*/

Route::get('/', function () {
    return view('welcome'); // Ruta principal
});

Route::get('/dashboard', function () {
    return view('dashboard'); // Vista del dashboard
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/balance', function () {
    return view('balance');
})->name('balance.view');

// Rutas protegidas por el middleware "auth"
Route::middleware('web')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Rutas de recursos para categorías
    Route::resource('categories', CategoryController::class)->except(['show']);
    // Rutas de recursos para productos
    Route::resource('product', ProductController::class)->except(['show']);

    // Grupo de rutas para la tienda (Shop)
    Route::prefix('shop')->name('shop.')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('index'); // Listado de productos en la tienda
        Route::post('add-to-cart', [ShopController::class, 'addToCart'])->name('add_to_cart'); // Añadir al carrito
        Route::post('increment', [ShopController::class, 'increment'])->name('increment'); // Incrementar cantidad
        Route::post('decrement', [ShopController::class, 'decrement'])->name('decrement'); // Reducir cantidad
        Route::post('remove', [ShopController::class, 'remove'])->name('remove'); // Eliminar del carrito
    });

    // Grupo de rutas para el carrito de compras (Cart)
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index'); // Mostrar el carrito
        Route::post('/increment', [CartController::class, 'increment'])->name('increment'); // Incrementar cantidad
        Route::post('/decrement', [CartController::class, 'decrement'])->name('decrement'); // Reducir cantidad
        Route::post('/remove', [CartController::class, 'remove'])->name('remove'); // Eliminar artículo
        Route::post('/clear', [CartController::class, 'clear'])->name('clear'); // Vaciar carrito
    });

    Route::resource('categories', CategoryController::class);

    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::post('/add-to-cart', [ShopController::class, 'addToCart'])->name('addToCart');
    Route::post('/increment', [ShopController::class, 'increment'])->name('increment');
    Route::post('/decrement', [ShopController::class, 'decrement'])->name('decrement');
    Route::post('/remove', [ShopController::class, 'remove'])->name('remove');
});

Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('/increment', [CartController::class, 'increment'])->name('increment');
    Route::post('/decrement', [CartController::class, 'decrement'])->name('decrement');
    Route::post('/remove', [CartController::class, 'remove'])->name('remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('clear');
});



Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/process-payment', [CartController::class, 'processPayment'])->name('cart.processPayment');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/balance/add', [BalanceController::class, 'addBalance'])->name('profile.addBalance');
Route::post('/balance/add', [BalanceController::class, 'addBalance'])->name('balance.add');

Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');

});
