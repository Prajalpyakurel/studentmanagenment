@extends('admin.layouts.main')

@section('content')

<style>
body {
    background: #f5f3f1;
}
h1, h3 {
    font-weight: 700;
    color: #4a2f23;
}
.card {
    border-radius: 12px;
    border: none;
    background: #ffffff;
    transition: 0.25s ease-in-out;
    box-shadow: 0 2px 10px rgba(0,0,0,0.06);
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}
.card-title {
    font-size: 1.15rem;
    font-weight: 600;
    color: #5a3c2e;
}
.display-6 {
    font-size: 1.8rem;
    font-weight: 600;
    color: #3b2c26;
}
.collection-card {
    border-left: 5px solid #8b5e3c;
}
.admission-card {
    border-left: 5px solid #15803d;
}
.bg-gradient-info,
.bg-gradient-primary,
.bg-gradient-success,
.bg-gradient-warning,
.bg-gradient-danger {
    background: #ffffff !important;
    color: #3b2c26 !important;
}
.card-body {
    text-align: center;
}
.container {
    padding: 30px;
}
</style>

<div class="container">

    <h1 class="my-4 text-center">Admissions & Collections Report</h1>

    <div class="row">

        <div class="col-md-6">
            <h3 class="mb-4 text-center">Collection Summary</h3>

            <div class="row">

                <div class="col-md-12 mb-4">
                    <div class="card collection-card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Collection</h5>
                            <p class="display-6">Nrs.{{ number_format($todaysCollection, 2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card collection-card">
                        <div class="card-body">
                            <h5 class="card-title">Last 7 Days Collection</h5>
                            <p class="display-6">Nrs.{{ number_format($last7DaysCollection, 2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card collection-card">
                        <div class="card-body">
                            <h5 class="card-title">This Month Collection</h5>
                            <p class="display-6">Nrs.{{ number_format($lastMonthCollection, 2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card collection-card">
                        <div class="card-body">
                            <h5 class="card-title">Previous Month Collection</h5>
                            <p class="display-6">Nrs.{{ number_format($previousMonthCollection, 2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card collection-card">
                        <div class="card-body">
                            <h5 class="card-title">Last 12 Months Collection</h5>
                            <p class="display-6">Nrs.{{ number_format($last12MonthsCollection, 2) }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <h3 class="mb-4 text-center">Admissions Summary</h3>

            <div class="row">

                <div class="col-md-12 mb-4">
                    <div class="card admission-card">
                        <div class="card-body">
                            <h5 class="card-title">Today's Admissions</h5>
                            <p class="display-6">{{ $todaysAdmissions }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card admission-card">
                        <div class="card-body">
                            <h5 class="card-title">Last 7 Days Admissions</h5>
                            <p class="display-6">{{ $last7DaysAdmissions }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card admission-card">
                        <div class="card-body">
                            <h5 class="card-title">This Month Admissions</h5>
                            <p class="display-6">{{ $lastMonthAdmissions }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card admission-card">
                        <div class="card-body">
                            <h5 class="card-title">Previous Month Admissions</h5>
                            <p class="display-6">{{ $previousMonthAdmissions }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-4">
                    <div class="card admission-card">
                        <div class="card-body">
                            <h5 class="card-title">Last 12 Months Admissions</h5>
                            <p class="display-6">{{ $last12MonthsAdmissions }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection