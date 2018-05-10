@extends('master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')

@endpush

@section('content')
    <div class="text-center">
        <h1>{{ 'Contact Page' }}</h1>
        <p>
            Having issues? Please contact us via email - info@p4.diddydear.com
        </p>
    </div>
@endsection