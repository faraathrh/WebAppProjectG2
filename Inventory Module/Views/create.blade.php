@extends('master.layout')
@section('head')
    <base href="{{ url('/') }}/">
@endsection
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Add New Item</h2>
    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf
        @include('inventory.form')
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('inventory.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

































{{-- @extends('master.layout')

@section('head')
    <base href="{{ url('/') }}/">
@endsection

@section('content')
<section class="menu section-bg py-5">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Add New Inventory Item</h2>
            <p>Fill in the details to add a new item to the inventory list.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ route('inventory.store') }}" method="POST" class="php-email-form">
                    @csrf

                    @include('inventory.form')

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-4">Save</button>
                        <a href="{{ route('inventory.index') }}" class="btn btn-secondary px-4">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
 --}}
