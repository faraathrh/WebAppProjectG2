@extends('master.layout')
@section('content')

<section id="pos" class="menu section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Ordering System</h2>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="menu-filters isotope-filters mb-5">
                <ul>
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-hotdrinks">Hot Drinks</li>
                    <li data-filter=".filter-colddrinks">Cold Drinks</li>
                    <li data-filter=".filter-pastries">Pastries</li>
                </ul>
            </div>

            <div class="menu-container isotope-container row gy-4">

                <!-- HOT DRINKS SECTION -->
                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/espresso.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Espresso</h5>
                                <p class="mb-1">Rich and aromatic espresso.</p>
                                <div class="price">RM 8.00</div>
                                <input type="hidden" name="name" value="Hot Espresso">
                                <input type="hidden" name="price" value="8.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/hotchoc.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Chocolate</h5>
                                <p class="mb-1">Creamy and indulgent hot chocolate.</p>
                                <div class="price">RM 8.50</div>
                                <input type="hidden" name="name" value="Hot Chocolate">
                                <input type="hidden" name="price" value="8.50">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/hotmatcha.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Matcha Latte</h5>
                                <p class="mb-1">Smooth and creamy matcha latte.</p>
                                <div class="price">RM 9.00</div>
                                <input type="hidden" name="name" value="Hot Matcha Latte">
                                <input type="hidden" name="price" value="9.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/hotamericano.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Americano</h5>
                                <p class="mb-1">Classic americano with a rich flavor.</p>
                                <div class="price">RM 9.00</div>
                                <input type="hidden" name="name" value="Hot Americano">
                                <input type="hidden" name="price" value="9.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/hotcappuccino.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Cappuccino</h5>
                                <p class="mb-1">Creamy cappuccino with a perfect balance.</p>
                                <div class="price">RM 9.00</div>
                                <input type="hidden" name="name" value="Hot Cappuccino">
                                <input type="hidden" name="price" value="9.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-hotdrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/hottea.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Hot Tea</h5>
                                <p class="mb-1">A selection of fine teas served hot.</p>
                                <div class="price">RM 7.50</div>
                                <input type="hidden" name="name" value="Hot Tea">
                                <input type="hidden" name="price" value="7.50">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <select name="type" class="form-control mb-2">
                                    <option value="earlgrey">Earl Grey</option>
                                    <option value="honeylemon">Honey Lemon</option>
                                    <option value="green">Green Tea</option>
                                    <option value="oolong">Oolong</option>
                                    <option value="englishbreakfast">English Breakfast</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- COLD DRINKS SECTION -->
                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedamericano.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Americano</h5>
                                <p class="mb-1">Refreshing iced americano with a bold flavor.</p>
                                <div class="price">RM 9.50</div>
                                <input type="hidden" name="name" value="Iced Americano">
                                <input type="hidden" name="price" value="9.50">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedlatte.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Latte</h5>
                                <p class="mb-1">Smooth iced latte with a creamy finish.</p>
                                <div class="price">RM 9.50</div>
                                <input type="hidden" name="name" value="Iced Latte">
                                <input type="hidden" name="price" value="9.50">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedmatchalatte.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Matcha Latte</h5>
                                <p class="mb-1">Chilled matcha latte with a refreshing taste.</p>
                                <div class="price">RM 10.00</div>
                                <input type="hidden" name="name" value="Iced Matcha Latte">
                                <input type="hidden" name="price" value="10.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedchocolate.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Chocolate</h5>
                                <p class="mb-1">Chilled chocolate drink with a rich flavor.</p>
                                <div class="price">RM 9.00</div>
                                <input type="hidden" name="name" value="Iced Chocolate">
                                <input type="hidden" name="price" value="9.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedcappuccino.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Cappuccino</h5>
                                <p class="mb-1">Iced cappuccino with a frothy top.</p>
                                <div class="price">RM 9.50</div>
                                <input type="hidden" name="name" value="Iced Cappuccino">
                                <input type="hidden" name="price" value="9.50">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-colddrinks">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/icedlemontea.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Iced Lemon Tea</h5>
                                <p class="mb-1">Refreshing iced lemon tea with a citrus twist.</p>
                                <div class="price">RM 6.00</div>
                                <input type="hidden" name="name" value="Iced Lemon Tea">
                                <input type="hidden" name="price" value="6.00">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- PASTRIES SECTION -->
                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/choccroissant.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Chocolate Croissant</h5>
                                <p class="mb-1">Flaky croissant filled with rich chocolate.</p>
                                <div class="price">RM 12.90</div>
                                <input type="hidden" name="name" value="Chocolate Croissant">
                                <input type="hidden" name="price" value="12.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/berrycheesecake.png') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Raspberry Cheesecake</h5>
                                <p class="mb-1">Creamy cheesecake with raspberry sauce.</p>
                                <div class="price">RM 14.90</div>
                                <input type="hidden" name="name" value="Raspberry Cheesecake">
                                <input type="hidden" name="price" value="14.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/tiramisu.png') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Tiramisu</h5>
                                <p class="mb-1">Classic Italian dessert with coffee and mascarpone.</p>
                                <div class="price">RM 14.90</div>
                                <input type="hidden" name="name" value="Tiramisu">
                                <input type="hidden" name="price" value="14.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/glazeddonut.png') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Glazed Donut</h5>
                                <p class="mb-1">Soft and fluffy donut with a sweet glaze.</p>
                                <div class="price">RM 11.90</div>
                                <input type="hidden" name="name" value="Glazed Donut">
                                <input type="hidden" name="price" value="11.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/lasagna.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Lasagna</h5>
                                <p class="mb-1">Layers of pasta with rich meat sauce and cheese.</p>
                                <div class="price">RM 15.90</div>
                                <input type="hidden" name="name" value="Lasagna">
                                <input type="hidden" name="price" value="15.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <select name="type" class="form-control mb-2">
                                    <option value="beef">Beef</option>
                                    <option value="chicken">Chicken</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 isotope-item filter-pastries">
                    <form method="POST" action="{{ route('add.to.cart') }}">
                        @csrf
                        <div class="menu-item d-flex align-items-center gap-4">
                            <img src="{{ asset('assets/img/menu/eggtart.webp') }}" class="menu-img img-fluid rounded-3" alt="">
                            <div>
                                <h5>Portugese Egg Tart</h5>
                                <p class="mb-1">Creamy egg tart with a flaky crust.</p>
                                <div class="price">RM 8.90</div>
                                <input type="hidden" name="name" value="Portugese Egg Tart">
                                <input type="hidden" name="price" value="8.90">
                                <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px;">
                                <select name="type" class="form-control mb-2">
                                    <option value="table">Table Service</option>
                                    <option value="takeaway">Takeaway</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <hr>

        <!-- Cart Display -->
        <h3>Cart</h3>
        @if (session('cart'))
            <ul class="list-group">
                @foreach (session('cart') as $index => $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item['name'] }} x{{ $item['quantity'] }}
                        <span>RM {{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                        <form action="{{ route('cart.remove', $index) }}" method="GET">
                            <button class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </li>
                @endforeach
            </ul>

            <div class="mt-3">
                <form action="{{ route('cart.empty') }}" method="GET">
                    <button class="btn btn-warning">Empty Cart</button>
                </form>
            </div>

            @else
            <p>Your cart is empty.</p>
            @endif

            <div class="mt-3">
                <form action="{{ route('checkout') }}" method="GET">
                    <button class="btn btn-primary">Checkout</button>
                </form>
            </div>
    </div>
</section>

@endsection
