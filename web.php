<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;

Route::get('/', function () {
    return view ('mainpage');;
});

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
