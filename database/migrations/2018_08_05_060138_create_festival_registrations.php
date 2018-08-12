<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestivalRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festival_registrations', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('registration_id');
            $table->smallInteger('quantity');
            $table->integer('registration_fee');
            $table->boolean('attend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('festival_registrations');
    }
}
