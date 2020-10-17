<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('phone')->nullable();
            $table->longText('address')->nullable();
            $table->string('email')->nullable();
            $table->date('date');
            $table->string('payment_method');
            $table->longText('description');
            $table->float('amount', 13, 4);
            $table->float('discount', 13, 4)->nullable();
            $table->float('paid', 13, 3);
            $table->string('reference')->nullable();
            $table->float('balance', 13, 4);
            $table->timestamps();
        });
    }
}
