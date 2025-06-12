@extends('master.layout')

@section('content')

<!-- Inventory Section -->
<section id="inventory" class="section">
  <div class="container-fluid py-5" data-aos="fade-up">
    <div class="row g-4">

      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2 class="fw-bold mb-0">Stock</h2>
          <a href="{{ route('inventory.create') }}" class="btn btn-success">+ Add item</a>
        </div>
      </div>

      <div class="col-12">
        <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
          <table class="table table-bordered align-middle">
            <thead class="table-light">
              <tr>
                <th><input type="checkbox"></th>
                <th>Product</th>
                <th>Category</th>
                <th>Unit type</th>
                <th>Current stock</th>
                <th>Min Threshold</th>
                <th>Status</th>
                <th>Last Updated</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inventory as $item)
              <tr>
                <td><input type="checkbox"></td>
                <td>{{ $item->product }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->unit_type }}</td>
                <td>{{ $item->current_stock }}/{{ $item->max_stock }}</td>
                <td>{{ $item->min_threshold }}</td>
                <td>
                  @if ($item->current_stock < $item->min_threshold)
                    <span class="badge bg-danger">Low</span>
                  @else
                    <span class="badge bg-success">OK</span>
                  @endif
                </td>
                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                <td>
                  <a href="{{ route('inventory.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                  <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this item?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Inventory Section -->

@endsection
