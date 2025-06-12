<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class POSController extends Controller
{
public function index()
{
    return view('POS');
}

public function addToCart(Request $request)
{
    $cart = session()->get('cart', []);
    $cart[] = [
        'id' => $request->item_id,
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'type' => $request->type,
    ];
    session(['cart' => $cart]);

    return redirect()->route('POS');
}

public function removeFromCart($index)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$index])) {
        unset($cart[$index]);
        session(['cart' => array_values($cart)]);
    }
    return redirect()->route('cart.remove');
}

public function emptyCart()
{
    session()->forget('cart');
    return redirect()->route('cart.clear');
}

public function checkout()
{
    return view('checkout');
}

public function processCheckout(Request $request)
{
    $cart = session('cart', []);
    $paymentMethod = $request->input('payment_method');

    if (empty($cart)) {
        return redirect()->route('checkout')->with('error', 'Cart is empty.');
    }

    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Create order
    $order = Order::create([
        'payment_method' => $paymentMethod,
        'status' => 'Preparing',
        'total_price' => $total,
    ]);

    // Add order items
    foreach ($cart as $item) {
    DB::table('ordered_items')->insert([
        'order_id' => $order->id,
        'item_name' => $item['name'],
        'item_price' => $item['price'],
        'quantity' => $item['quantity'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}

    // Store order info for receipt
    session()->put('order', [
        'id' => $order->id,
        'payment_method' => $paymentMethod,
        'items' => $cart,
        'total' => $total,
        'status' => 'Preparing',
    ]);

    session()->forget('cart'); // Clear cart

    return redirect()->route('receipt');
}

public function receipt()
{
    return view('receipt');
}

}
