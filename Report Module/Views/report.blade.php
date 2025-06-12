@extends('master.layout')

@section('content')

{{-- <body class="index-page"> --}}

    <div class="container mt-5">
    {{-- <h3 class="mb-4">Monthly Sales Report</h3> --}}

    <div class="card">
        <div class="card-body">
            <h2 style="color: black;font-family: var(--nav-font);">📊 Monthly Sales Report</h2>
            <canvas id="monthlyChart"></canvas>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="card-body">
            <h2 style="color: black; font-family: var(--nav-font);">🏆 Best-Selling Items</h2>
            <canvas id="topItemsChart"></canvas>
        </div>
    </div>
    <br>
    <br>
    <div class="card">
        <div class="card-body">
            <h2 style="color: black; font-family: var(--nav-font);">🐢 Slow Mover Items</h2>
            <canvas id="slowItemsChart"></canvas>
        </div>
    </div>
    </div>
  {{-- <div class="card">
    <h2>📊 Monthly Sales Report</h2>
    <canvas id="monthlyChart" height="100"></canvas>

    <h2 class="mt-5">🏆 Best-Selling Items</h2>
    <canvas id="topItemsChart" height="100"></canvas>

    <h2 class="mt-5">🐢 Slow Mover Items</h2>
    <canvas id="slowItemsChart" height="100"></canvas>
  </div> --}}
    {{-- </body> --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Monthly Sales Chart
        new Chart(document.getElementById('monthlyChart'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($months) !!},
                datasets: [{
                    label: 'Total Sales (RM)',
                    data: {!! json_encode($sales) !!},
                    backgroundColor: '#007bff'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Best Selling Items
        new Chart(document.getElementById('topItemsChart'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($topItems) !!},
                datasets: [{
                    label: 'Units Sold',
                    data: {!! json_encode($topSales) !!},
                    backgroundColor: '#28a745'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Slow Mover Items
        new Chart(document.getElementById('slowItemsChart'), {
            type: 'bar',
            data: {
                labels: {!! json_encode($slowItems) !!},
                datasets: [{
                    label: 'Units Sold',
                    data: {!! json_encode($slowSales) !!},
                    backgroundColor: '#dc3545'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection








{{-- @extends('master.layout') --}}

{{-- @section('content') --}}

{{-- <body class="index-page"> --}}
{{-- <canvas id="salesChart" width="400" height="200"></canvas> --}}


{{-- @section('content')
<div class="container mt-5">
    <h3 class="mb-4">Monthly Sales Report</h3>

    <div class="card">
        <div class="card-body">
            <canvas id="salesChart"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($months) !!}, // e.g. ["Jan", "Feb", "Mar"]
            datasets: [{
                label: 'Total Sales (RM)',
                data: {!! json_encode($sales) !!}, // e.g. [500, 750, 620]
                backgroundColor: '#007bff'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection --}}


{{-- @endsection --}}










