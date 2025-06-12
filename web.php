<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoyaltyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\POSController;



// Main Page Route
Route::get('/', function () { return view('home'); })->name('home');

// Route::resource('menu', MenuController::class);
// Route::get('/add-menu', [MenuController::class, 'create'])->name('menu.add');
Route::get('/menu/index', [MenuController::class, 'show'])->name('menu.show');
Route::get('/menu/index', [MenuController::class, 'create'])->name('menu.create');
Route::get('/menu/index', [MenuController::class, 'edit'])->name('menu.edit');
Route::get('/menu/index', [MenuController::class, 'destroy'])->name('menu.destroy');


// inventory
Route::prefix('loyalty')->group(function () {
    // Route::get('/', [LoyaltyController::class, 'index'])->name('index');
    Route::get('/create', [LoyaltyController::class, 'create'])->name('create');
    // Route::post('/', [LoyaltyController::class, 'store'])->name('store');
    Route::get('/{id}', [LoyaltyController::class, 'show'])->name('show');
    Route::post('/{customerId}/transaction', [LoyaltyController::class, 'addTransaction'])
        ->name('loyalty.addTransaction');
});

//sales report
Route::get('/report', [ReportController::class, 'showReports'])->name('reports');

// // RESTful routes for inventory
// Route::resource('inventory', InventoryController::class);
Route::get('/inventory/indexinventory', [InventoryController::class, 'create'])->name('menu.add');

// Route::resource('menu', MenuController::class);
Route::get('/add-menu', [MenuController::class, 'create'])->name('menu.add');

Route::get('/dashboard', function () {
    return view('dashboard'); // Breeze default
})->middleware(['auth'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

require __DIR__.'/auth.php'; // This must be present to enable login & register routes

// POS main page
Route::get('/POS', [POSController::class, 'index'])->name('POS');

// Add item to cart
Route::post('/POS/add', [POSController::class, 'addToCart'])->name('add.to.cart');

// View checkout page
Route::get('/checkout', [POSController::class, 'checkout'])->name('checkout');

// Process checkout (store order, etc.)
Route::post('/checkout/process', [POSController::class, 'processCheckout'])->name('checkout.process');

// Show receipt
Route::get('/receipt', function () {
    return view('receipt');
})->name('receipt');

// Remove specific item from cart
Route::get('/removeFromCart/{index}', function ($index) {
    $cart = session('cart', []);
    unset($cart[$index]); // remove by array index
    session(['cart' => array_values($cart)]); // reindex
    return redirect('/POS'); // or your POS route
})->name('cart.remove');


Route::get('/cart/clear', [POSController::class, 'clearCart'])->name('cart.clear');

Route::get('/empty-cart', function () {
    session()->forget('cart');
    return redirect()->route('POS')->with('success', 'Cart emptied.');
})->name('cart.empty');



// Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// require __DIR__.'/auth.php';
