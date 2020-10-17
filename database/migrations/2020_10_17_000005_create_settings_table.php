<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->longText('address');
            $table->string('tel');
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('receipt_prefix');
            $table->integer('number_digit')->nullable();
            $table->integer('next_number');
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
    }
}
