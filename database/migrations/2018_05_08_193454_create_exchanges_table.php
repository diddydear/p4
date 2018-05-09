<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('account_name')->nullable();
            $table->string('buying_currency');
            $table->float('buying_amount');
            $table->string('selling_currency');
            $table->float('selling_amount');
            $table->string('agree_terms', 4);
            $table->string('transaction_id', 32);
            $table->string('account_number', 8)->nullable();
            $table->string('bank_name', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}
