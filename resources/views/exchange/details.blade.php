@extends('master')

@section('title')
    {{ 'Transaction Details' }}
@endsection

@push('head')

@endpush

@section('content')
    <div>
        <h1>{{ 'Transaction Details' }}</h1>

        <div class="col-lg-6">

            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <small class="text-muted"> Account Name</small>
                        <h6 class="my-0 text-info">{{ $exchange->account_name }}</h6>
                    </div>

                </li>


                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <small class="text-muted">Transaction ID</small>
                        <h6 class="my-0 text-info">{{ $exchange->transaction_id }}</h6>
                    </div>
                </li>


                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <small class="text-muted"> Selling Amount</small>
                        <h6 class="my-0 text-info">NGN{{ $exchange->selling_amount }}</h6>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>

                        <small class="text-muted"> Buying Amount</small>
                        <h6 class="my-0 text-info">{{ $exchange->buying_currency }}{{ $exchange->buying_amount }}</h6>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">


                        <div class="row">
                            <a href="/exchange/{{ $exchange->id }}/edit" class="col-lg-6 btn btn-success">Edit Transaction</a>
                            <a href="/exchange/{{ $exchange->id }}/delete" class="col-lg-6 btn btn-danger">Delete Transaction</a>

                        </div>
                </li>


            </ul>
        </div>

    </div>
@endsection