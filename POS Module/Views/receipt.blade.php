@extends('master.layout')
@section('content')

<section id="menu" class="menu section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Receipt</h2>
    </div>

    <style>
    @media print {
    @page {
        size: A6;
        margin: 10mm;
    }

    body * {
        visibility: hidden;
    }

    #printable, #printable * {
        visibility: visible;
    }

    #printable {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        font-size: 12px;
        font-family: monospace;
    }

    .list-group-item {
        border: none !important;
        padding: 5px 0 !important;
    }

    .d-flex.justify-content-between {
        display: flex;
        justify-content: space-between;
    }

    .btn, a, header, footer, nav {
        display: none !important;
    }

    html, body {
        margin: 0;
        padding: 0;
    }
}
</style>


    <div class="container" data-aos="fade-up">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        @php
            $order = session('order');
        @endphp

        @if ($order && isset($order['items']))
            @php
                $total = 0;
                foreach ($order['items'] as $item) {
                    $total += $item['price'] * $item['quantity'];
                }
            @endphp

            <div id="printable">
            <p><strong>Date:</strong> {{ now()->format('Y-m-d H:i') }}</p>
            <p><strong>Payment Method:</strong> {{ $order['payment_method'] }}</p>
            <p><strong>Status:</strong> {{ $order['status'] ?? 'Pending' }}</p>
            <hr>

            <ul class="list-group mb-3">
                @foreach ($order['items'] as $item)
                    <li class="list-group-item d-flex justify-content-between">
                        <span>{{ $item['name'] }} x{{ $item['quantity'] }}</span>
                        <span>RM {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total:</strong>
                    <strong>RM {{ number_format($total, 2) }}</strong>
                </li>
            </ul>
            <p>Thank you for your purchase!</p>
            <br></br>

             @else
            <p>No order data found. Please complete checkout first.</p>
            @endif

            </div>

            <div class="mt-3">
                <button onclick="window.print()" class="btn btn-outline-secondary">Print Receipt</button>
                <a href="{{ route('POS') }}" class="btn btn-primary">Back to POS</a>
            </div>
        </div>
    </div>
</section>

@endsection
