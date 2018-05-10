<?php

use Illuminate\Database\Seeder;
use App\Local;

class LocalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $table->integer('currency_id');
//        $table->integer('exchange_id');
//        $table->string('local_currency', 12);


        $locals = [
            ['1', '2', 'NGN'],
            ['2', '3', 'NGN'],
            ['3', '5', 'NGN'],
        ];

        $count = count($locals);

        foreach ($locals as $key => $localData) {
            $local = new Local();

            $local->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $local->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $local->currency_id = $localData[0];
            $local->exchange_id = $localData[1];
            $local->local_currency = $localData[2];

            $local->save();
            $count--;
        }
    }
}
