@extends('master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class="text-left">
        <h1>{{ 'Currency Exchange' }}</h1>
        <h4>{{ 'Please Fill in Your Account Details' }}</h4>

        <div class="col-lg-4">
            sellingCurrency = {{ $_POST['sellingCurrency'] }}
        </div>
        <div class="col-lg-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Currency Rates</span>
            </h4>

        </div>
    </div>
@endsection