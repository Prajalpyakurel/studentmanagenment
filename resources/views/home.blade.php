@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Admissions & Collections Report</h1>

        <div class="row">
            <!-- Collection Summary -->
            <div class="col-md-6">
                <h3 class="mb-4 text-center">Collection Summary</h3>
                <div class="row">
                    <!-- Today's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-info shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Today's Collection</h5>
                                <p class="card-text display-6">${{ number_format($todaysCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 7 Days Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-primary shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 7 Days Collection</h5>
                                <p class="card-text display-6">${{ number_format($last7DaysCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- This Month's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-success shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">This Month's Collection</h5>
                                <p class="card-text display-6">${{ number_format($lastMonthCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Previous Month's Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-warning shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Previous Month's Collection</h5>
                                <p class="card-text display-6">${{ number_format($previousMonthCollection, 2) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 12 Months Collection -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-danger shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 12 Months Collection</h5>
                                <p class="card-text display-6">${{ number_format($last12MonthsCollection, 2) }}</p>
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
                        <div class="card text-white bg-info shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Today's Admissions</h5>
                                <p class="card-text display-6">{{ $todaysAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 7 Days Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-primary shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 7 Days Admissions</h5>
                                <p class="card-text display-6">{{ $last7DaysAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- This Month's Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-success shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">This Month's Admissions</h5>
                                <p class="card-text display-6">{{ $lastMonthAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Previous Month's Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-warning shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Previous Month's Admissions</h5>
                                <p class="card-text display-6">{{ $previousMonthAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Last 12 Months Admissions -->
                    <div class="col-md-12 mb-4">
                        <div class="card text-white bg-danger shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title">Last 12 Months Admissions</h5>
                                <p class="card-text display-6">{{ $last12MonthsAdmissions }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
