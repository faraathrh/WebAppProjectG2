@extends('layout.app')

@section('content')
    <section class="section py-4"> {{-- Add py-4 for consistent padding --}}
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Register New Customer</h2>
                <p>Add to <span>Loyalty Program</span></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12"> {{-- Changed from col-lg-8 to col-lg-12 --}}
                    <div class="card">
                        <div class="card-header">
                            <h4>Customer Information</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('store') }}">
                                @csrf
{{-- @section('content')
    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Register New Customer</h2>
                <p>Add to <span>Loyalty Program</span></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Customer Information</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('store') }}">
                                @csrf --}}

                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>

                                <div class="mb-3">
                                    <label for="birth_date" class="form-label">Birth Date (Optional)</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Register Customer
                                    </button>
                                    <a href="{{ route('index') }}" class="btn btn-secondary">
                                        <i class="bi bi-arrow-left"></i> Back to List
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
