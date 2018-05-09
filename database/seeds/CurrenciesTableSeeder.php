<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            ['USD', '360', '$', 'images/flag/us.png'],
            ['GBP', '450', '£', 'images/flag/uk.png'],
            ['EURO', '500', '€', 'images/flag/eu.png'],
        ];

        $count = count($currencies);

        foreach ($currencies as $key => $currencyData) {
            $currency = new Currency();

            $currency->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $currency->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $currency->currency_name = $currencyData[0];
            $currency->currency_rate = $currencyData[1];
            $currency->currency_symbol = $currencyData[2];
            $currency->currency_icon = $currencyData[3];

            $currency->save();
            $count--;
        }
    }
}
