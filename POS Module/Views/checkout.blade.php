@extends('master.layout')
@section('content')

<section id="menu" class="menu section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Checkout</h2>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        @if (session('cart'))
            @php
                $cartItems = session('cart');
                $cartTotal = 0;
                foreach ($cartItems as $item) {
                    $cartTotal += $item['price'] * $item['quantity'];
                }
            @endphp

            <h4 class="mt-4">Order Summary</h4>
            <ul class="list-group mb-3">
                @foreach ($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between">
                        <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                        <span>RM {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between font-weight-bold">
                    <strong>Total:</strong>
                    <strong>RM {{ number_format($cartTotal, 2) }}</strong>
                </li>
            </ul>

            <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
                <h5>Select Payment Method:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" value="Cash" required>
                    <label class="form-check-label">Cash</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" value="Card">
                    <label class="form-check-label">Debit/Credit Card</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" value="e-Wallet">
                    <label class="form-check-label">e-Wallet</label>
                </div>
                <button type="submit" class="btn btn-success mt-3">Confirm Order</button>
            </form>
        @else
            <p>No items in your cart. Please add items before proceeding to checkout.</p>
        @endif
    </div>
</section>

@endsection
