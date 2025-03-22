@extends('admin.layouts.main')

@section('content')
    <style>
        /* Custom Styling */
        body {
            background: linear-gradient(135deg, #f0f2f5, #dfe7fd);
        }
        .container {
            padding: 30px;
        }
        .card {
            border-radius: 12px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
            background-color: #f08c8c;
        }
        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
        }
        .display-6 {
            font-size: 2rem;
            font-weight: 600;
        }
        h1, h3 {
            font-weight: bold;
            color: #333;
        }
    </style>

    <div class="container">
        <h1 class="my-4 text-center">Admissions & Collections Report</h1>

        <div class="row">
            <!-- Collection Summary -->
            <div class="col-md-6">
                <h3 class="mb-4 text-center">Collection Summary</h3>
                <div class="row">
                    <!-- Today's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-info text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Today's Collection</h5>
                                <p class="card-text display-6 text-dark">Nrs.{{ number_format($todaysCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 7 Days Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-primary text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 7 Days Collection</h5>
                                <p class="card-text display-6 text-dark">Nrs.{{ number_format($last7DaysCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- This Month's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-success text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">This Month's Collection</h5>
                                <p class="card-text display-6 text-dark">Nrs.{{ number_format($lastMonthCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Previous Month's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-warning text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Previous Month's Collection</h5>
                                <p class="card-text display-6 text-dark">Nrs.{{ number_format($previousMonthCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 12 Months Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-danger text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 12 Months Collection</h5>
                                <p class="card-text display-6 text-dark">Nrs.{{ number_format($last12MonthsCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admissions Summary -->
            <div class="col-md-6">
                <h3 class="mb-4 text-center">Admissions Summary</h3>
                <div class="row">
                    <!-- Today's Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-info text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Today's Admissions</h5>
                                <p class="card-text display-6 text-dark">{{ $todaysAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 7 Days Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-primary text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 7 Days Admissions</h5>
                                <p class="card-text display-6 text-dark">{{ $last7DaysAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- This Month's Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-success text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">This Month's Admissions</h5>
                                <p class="card-text display-6 text-dark">{{ $lastMonthAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Previous Month's Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-warning text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Previous Month's Admissions</h5>
                                <p class="card-text display-6 text-dark">{{ $previousMonthAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 12 Months Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card bg-gradient-danger text-white shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 12 Months Admissions</h5>
                                <p class="card-text display-6 text-dark">{{ $last12MonthsAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
