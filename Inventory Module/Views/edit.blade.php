@extends('master.layout')
@section('head')
    <base href="{{ url('/') }}/">
@endsection
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Edit Item</h2>
    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('inventory.form', ['inventory' => $inventory])
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
