@extends('master')

@section('title')
    {{ 'Delete Transaction' }}
@endsection

@push('head')

@endpush

@section('content')
    <h1>Delete Transaction</h1>
    <h4 class="text-info">{{ $exchange->account_name }} - <small>{{ $exchange->transaction_id }}</small></h4><br>
    <h4 class="text-danger">This Process cannot be reversed!</h4><br>





    <div class="row">
        <div class="col-lg-8">
            <form action="/exchange/{{ $exchange->id }}" method="POST">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="row">
                    <input name="submit" value="Proceed With Delete" class="col-lg-4 btn btn-danger" type="submit">
                    <div class="col-lg-1"></div>
                    <a href="/exchange/{{ $exchange->id }}/edit" class="col-lg-4 btn btn-success">Cancel Delete</a>
                </div>
            </form>
        </div>
    </div>

@endsection