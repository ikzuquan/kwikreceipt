<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->unsignedInteger('currency_id');
            $table->foreign('currency_id', 'currency_fk_2417394')->references('id')->on('currencies');
            $table->unsignedInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2417402')->references('id')->on('users');
        });
    }
}
