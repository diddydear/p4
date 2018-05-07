@extends('master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.js"></script>

    <script type="text/javascript">
        $(window).load(function() {

            $('#buyingCurrency').change(function() {
                $('#show_box, #total_box').empty();
                var sum = 0,
                    price;
                $(this).find('option:selected').each(function() {
                    if ($(this).attr('data-price')) {
                        price = $(this).data('price');
                        sum += price;
                        $('#show_box').append('<h4>' + price + '</h4>');
                    }
                });
                $('#total_box').text(sum);
            });

        });

    </script>


    <script language="javascript">
        function Calculate() {
            var c = document.getElementById('buyingCurrency').value;
            var a = document.getElementById('buyingAmount').value;
            var result = c * a;
            document.getElementById('amountTotal').innerHTML = result;
        }

    </script>

@endpush

@section('content')
    <h1>{{ 'Currency Exchange' }}</h1>

    <div class="col-lg-6">
        <form action="/currency/calculate" method="POST"  id="exchange">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="sellingCurrency">I Have</label>
                    <select class="custom-select" name="sellingCurrency" id="sellingCurrency" required>
                        <option value="NGN">NGN</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="buyingCurrency">I Need</label>
                    <select class="custom-select auto-sum" name="buyingCurrency" onChange="Calculate();" id="buyingCurrency" required>
                        <option value="">Choose...</option>
                        <option data-price="360" value="360">USD</option>
                        <option data-price="450" value="450">GBP</option>
                        <option data-price="500" value="500">Euro</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">

                    <label for="buyingAmount">Amount Needed</label>
                    <input type="text" class="form-control auto-sum" onChange="Calculate();" name="buyingAmount" id="buyingAmount" required>
                </div>
            </div>

            <hr class="mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Total</h4>
                    <h4 class="text-info" id="amountTotal"></h4>

                    <p></p>
                </div>

                <div class="col-lg-4">
                    <h4>Rate - NGN</h4>
                    <div class="text-info" id="show_box"></div>

                </div>

            </div>
            <hr class="mb-4">
            <input name="amountReceivedTotal" type="hidden" id="total2" value="">

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="isOutstanding" name="isOutstanding" value="1">
                <label class="custom-control-label" for="isOutstanding">Is this payment completed?</label>
            </div>
            <br>
            <input type='hidden' name='_token' value='{{ csrf_field() }}'>
            <input name="submit" value="Submit" class="btn btn-primary btn-lg btn-block" type="submit">
        </form>
    </div>





@endsection