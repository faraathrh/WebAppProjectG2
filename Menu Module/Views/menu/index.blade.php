@extends('master.layout')

@section('content')
<!-- Menu Section -->
<section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Check Our Tasty Menu</p>
    <a href="{{ route('menu.create') }}" class="btn btn-success">Add Menu Item</a>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-starters">Hot Drinks</li>
          <li data-filter=".filter-salads">Cold Drinks</li>
          <li data-filter=".filter-specialty">Pastries</li>
        </ul>
      </div>
    </div>

    <div class="row">
      @foreach ($menus as $item)
      <div class="col-lg-6 menu-item filter-{{ strtolower($item->category) }}">
        <img src="{{ asset('storage/' . $item->image) }}" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">{{ $item->name }}</a><span>RM{{ number_format($item->price, 2) }}</span>
        </div>
        <div class="menu-ingredients">
          {{ $item->description }}
        </div>
        <div class="menu-actions mt-2">
          <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('menu.destroy', $item->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- /Menu Section -->

<!-- Filtering Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.menu-filters li').click(function() {
      // Update active button
      $('.menu-filters li').removeClass('filter-active');
      $(this).addClass('filter-active');

      // Get filter value
      const filterValue = $(this).attr('data-filter');

      // Show/hide items
      $('.menu-item').hide(); // Hide all first
      if (filterValue === '*') {
        $('.menu-item').show();
      } else {
        $(filterValue).show();
      }
    });
  });
</script>
@endsection
