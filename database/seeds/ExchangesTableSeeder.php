<?php

use Illuminate\Database\Seeder;
use App\Exchange;

class ExchangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $exchanges = [
            ['Phillip Aso', 'GBP', '200', 'NGN', '72000', 'on', '152587692848tl', 'GTB', '10245637'],
            ['John Doe', 'USD', '150', 'NGN', '54000', 'on', '153759692848et', 'DIAMOND', '168795637'],
            ['Mercy Ann', 'EURO', '325', 'NGN', '162500', 'on', '152395692848yu', 'ZENITH', '10245637'],

        ];

        $count = count($exchanges);

        foreach ($exchanges as $key => $exchangeData) {
            $exchange = new Exchange();

            $exchange->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $exchange->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $exchange->account_name = $exchangeData[0];
            $exchange->buying_currency = $exchangeData[1];
            $exchange->buying_amount = $exchangeData[2];
            $exchange->selling_currency = $exchangeData[3];
            $exchange->selling_amount = $exchangeData[4];
            $exchange->agree_terms = $exchangeData[5];
            $exchange->transaction_id = $exchangeData[6];
            $exchange->account_number = $exchangeData[7];
            $exchange->bank_name = $exchangeData[8];

            $exchange->save();
            $count--;
        }
    }
}
