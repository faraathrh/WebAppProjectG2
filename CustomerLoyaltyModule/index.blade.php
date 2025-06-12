@extends('layout.app')

@section('content')
    <section class="section py-4"> {{-- Make sure it has py-4 --}}
        <div class="container" data-aos="fade-up">
{{-- @section('content')
    <section class="section">
        <div class="container" data-aos="fade-up"> --}}
            <div class="section-header">
                <h2>Customer Loyalty Program</h2>
                <p>Manage <span>Registered Customers</span></p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Registered Customers</h4>
                            <a href="{{ route('create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i>Register New Customer
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Points</th>
                                            <th>Registered</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->phone }}</td>
                                                <td>{{ $customer->points->points ?? 0 }}</td>
                                                <td>{{ $customer->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <a href="{{ route('show', $customer->id) }}"
                                                        class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                {{ $customers->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
