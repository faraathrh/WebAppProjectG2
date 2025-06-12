<div class="mb-3">
    <label class="form-label">Product</label>
    <input type="text" name="product" class="form-control" value="{{ old('product', $inventory->product ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Category</label>
    <input type="text" name="category" class="form-control" value="{{ old('category', $inventory->category ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Unit Type</label>
    <input type="text" name="unit_type" class="form-control" value="{{ old('unit_type', $inventory->unit_type ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Current Stock</label>
    <input type="number" name="current_stock" class="form-control" value="{{ old('current_stock', $inventory->current_stock ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Max Stock</label>
    <input type="number" name="max_stock" class="form-control" value="{{ old('max_stock', $inventory->max_stock ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Min Threshold</label>
    <input type="number" name="min_threshold" class="form-control" value="{{ old('min_threshold', $inventory->min_threshold ?? '') }}" required>
</div>
