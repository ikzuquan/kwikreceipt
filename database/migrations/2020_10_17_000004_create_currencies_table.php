<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->boolean('enabled')->default(0)->nullable();
            $table->integer('precision');
            $table->string('symbol');
            $table->boolean('symbol_first')->default(0)->nullable();
            $table->string('thousand_seperator')->nullable();
            $table->string('decimal_mark');
            $table->timestamps();
        });
    }
}
