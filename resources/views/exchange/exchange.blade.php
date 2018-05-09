@extends('master')

@section('title')
    {{ 'Welcome' }}
@endsection

@push('head')
    <script src="http://code.jquery.com/jquery-2.1.0.js"></script>

    <script>
        $(window).load(function () {

            $('#buyingCurrency').change(function () {
                $('#show_box, #total_box').empty();
                var sum = 0,
                    price;
                $(this).find('option:selected').each(function () {
                    if ($(this).attr('data-price')) {
                        price = $(this).data('price');
                        sum += price;
                        $('#show_box').append('<h4>' + price + '</h4>');
                    }
                });

            });

        });

    </script>


    <script>
        function Calculate() {
            var c = document.getElementById('buyingCurrency').value;
            var a = document.getElementById('buyingAmount').value;
            var result = c * a;
            document.getElementById('amountTotal').innerHTML = result;

            var buyingCurrency = document.getElementById("buyingCurrency");
            document.getElementById("display").innerHTML = buyingCurrency.options[buyingCurrency.selectedIndex].text;
            document.getElementById("display2").innerHTML = buyingCurrency.options[buyingCurrency.selectedIndex].text;
            document.getElementById("selectedCurrency").value = buyingCurrency.options[buyingCurrency.selectedIndex].text;
        }
    </script>

@endpush

@section('content')
    <h1>{{ 'Currency Exchange' }}</h1>

    <div class="row">
       <div class="col-lg-8">
           <form action="/exchange/submit" method="POST" id="exchange" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="row">
                   <div class="col-md-4 mb-3">
                       <label for="sellingCurrency">You're Selling <br><small class="text-info">(Currency)</small></label>
                       <select class="custom-select" name="sellingCurrency" id="sellingCurrency">
                           <option value="NGN">NGN</option>
                       </select>
                   </div>
                   <div class="col-md-4 mb-3">
                       <label for="buyingCurrency">We're Buying <br><small class="text-info">(Please Choose Currency)</small></label>
                       <select class="custom-select auto-sum" name="buyingCurrency" onChange="Calculate();"
                               id="buyingCurrency">
                           <option value="">...</option>
                           @include('modules.currency')
                       </select>
                       @include('modules.error', ['errorField' => 'buyingCurrency'])
                   </div>
                   <div class="col-md-4">
                       <label for="buyingAmount">Amount Needed <br><small class="text-info">(Min: <span id="display"></span>10, Max: <span id="display2"></span>500)</small></label>

                       <input type="number" class="form-control auto-sum" value="{{ old('buyingAmount') }}" onChange="Calculate();" name="buyingAmount" id="buyingAmount">
                       @include('modules.error', ['errorField' => 'buyingAmount'])
                   </div>
               </div>

               <hr class="mb-4">
               <div class="row">
                   <div class="col-lg-4">
                       <h4>Total</h4>
                       <h4 class="text-info" id="amountTotal">Your Total </h4>

                       <p></p>
                   </div>

                   <div class="col-lg-4">
                       <h4>Rate - NGN</h4>
                       <div class="text-info" id="show_box"></div>
                       <input name="selectedCurrency" id="selectedCurrency" type="hidden" value="">

                   </div>

               </div>
               <hr class="mb-4">
                <h4>BANK DETAILS</h4>

               <div class="row">

                   <div class="col-md-4 mb-3">
                       <label for="accountName">Account Name </label>

                       <input type="text" class="form-control" value="{{ old('accountName') }}" name="accountName" id="accountName">
                       @include('modules.error', ['errorField' => 'accountName'])
                   </div>


                   <div class="col-md-4 mb-3">
                       <label for="bankName">Bank Name </label>

                       <input type="text" class="form-control" value="{{ old('bankName') }}" name="bankName" id="bankName">
                       @include('modules.error', ['errorField' => 'bankName'])
                   </div>

                   <div class="col-md-4 mb-3">
                       <label for="accountNumber">Account Number </label>

                       <input type="text" class="form-control" value="{{ old('accountNumber') }}" name="accountNumber" id="accountNumber">
                       @include('modules.error', ['errorField' => 'accountNumber'])
                   </div>



               </div>



               <div>
                   <input type="checkbox" class="form-check-input" id="agreeTerms" name="agreeTerms" {{ old('agreeTerms') ? ' checked' : '' }}>
                   <label class="form-check-label" for="agreeTerms">Check to agree our terms and conditions</label>
                   @include('modules.error', ['errorField' => 'agreeTerms'])
               </div>
               <br>
               <input name="getTransactionId" type="hidden" value="{{ time() }}{{ str_random(4) }}">
               <input name="submit" value="Continue" class="btn btn-primary btn-lg btn-block" type="submit">
           </form>
       </div>

       <div class="col-lg-4">
           <h4 class="d-flex justify-content-between align-items-center mb-3">
               <span class="text-muted">Currency Rates</span>
           </h4>
           @include('modules.rates')
       </div>
   </div>

@endsection