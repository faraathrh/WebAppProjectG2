@extends('master.layout')

@section('content')
<section id="add-menu" class="add-menu section">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Add Menu Item</h2>
      <p>Add New Item to Our Menu</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="form-group mb-3">
            <label for="name">Item Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="form-group mb-3">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" required>
              <option value="starters">Hot Drinks</option>
              <option value="salads">Cold Drinks</option>
              <option value="specialty">Pastries</option>
            </select>
          </div>

          <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
          </div>

          <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>

          <div class="form-group mb-3">
            <label for="image">Item Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Add Item</button>
            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
