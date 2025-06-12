@extends('master.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Menu Item</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-control" id="category" name="category" required>
                                <option value="starters" {{ $menu->category == 'starters' ? 'selected' : '' }}>Hot Drinks</option>
                                <option value="salads" {{ $menu->category == 'salads' ? 'selected' : '' }}>Cold Drinks</option>
                                <option value="specialty" {{ $menu->category == 'specialty' ? 'selected' : '' }}>Pastries</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" min="0" class="form-control" id="price" name="price" value="{{ $menu->price }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $menu->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Current Image</label>
                            <img src="{{ $menu->image_url }}" width="150" class="d-block mb-2">
                            <label for="image" class="form-label">Change Image (optional)</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Item</button>
                        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
