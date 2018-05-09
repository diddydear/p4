@foreach ($currencies as $currency)

    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>

                <small class="text-muted"> NGN - {{ $currency->currency_name }}</small>
                <img src="{{ env('APP_URL') }}/{{ $currency->currency_icon}}" alt="{{ $currency->currency_name}}"> <h6 class="my-0 text-info">{{ $currency->currency_name }}</h6>
            </div>
            <span class="text-muted">NGN{{ $currency->currency_rate }} - {{ $currency->currency_symbol }}1 </span>
        </li>
    </ul>

@endforeach

