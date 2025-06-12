@extends('layout.app')

@section('content')
    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Customer Details</h2>
                <p>View <span>Loyalty Information</span></p>
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
                            <h4>{{ $customer->name }}</h4>
                            <span class="badge bg-primary">
                                <i class="bi bi-star-fill"></i> {{ $customer->points->points ?? 0 }} Points
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h5>Customer Information</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Email:</strong> {{ $customer->email }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Phone:</strong> {{ $customer->phone }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Birth Date:</strong>
                                            {{ $customer->birth_date ? \Carbon\Carbon::parse($customer->birth_date)->format('M d, Y') : 'Not provided' }}
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Member Since:</strong>
                                            {{ $customer->created_at->format('M d, Y') }}
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h5>Add New Transaction</h5>
                                    <form method="POST" action="{{ route('loyalty.addTransaction', $customer->id) }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Purchase Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">RM</span>
                                                <input type="number" step="0.01" class="form-control" id="amount"
                                                    name="amount" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description (Optional)</label>
                                            <input type="text" class="form-control" id="description" name="description">
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-plus-circle"></i> Add Transaction
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <h5>Transaction History</h5>
                            @if ($customer->transactions->isEmpty())
                                <div class="alert alert-info">
                                    No transactions found for this customer.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Points Earned</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customer->transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->created_at->format('M d, Y h:i A') }}</td>
                                                    <td>${{ number_format($transaction->amount, 2) }}</td>
                                                    <td>{{ $transaction->points_earned }}</td>
                                                    <td>{{ $transaction->description ?? '-' }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('index') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Back to List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
