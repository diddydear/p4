@extends('master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class="text-center">
        <h1>{{ 'About Page' }}</h1>

        <p>
            Our goal is to provide instant and efficient currency exchange services to our clients.
            We help our clients to exchange the Dollars, Pounds and Euros to the Nigerian Naira and vice versa.
            We are tested and trusted by our clients and we offer the best rates around. Our fast, affordable,
            and reliable services ensure that you get the best value for your money.
        </p>
    </div>
@endsection