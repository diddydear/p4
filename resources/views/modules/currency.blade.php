@foreach ($currencies as $currency)


    <option data-price="{{ $currency->currency_rate }}" value="{{ $currency->currency_rate }}" @if(old('buyingCurrency')==$currency->currency_rate) selected @endif>{{ $currency->currency_name }}</option>

@endforeach

