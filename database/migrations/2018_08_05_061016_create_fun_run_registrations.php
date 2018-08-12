<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunRunRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fun_run_registrations', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('registration_id');
            $table->smallInteger('run_number')->nullable();
            $table->string('shirt_size');
            $table->string('medical_record')->nullable();
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
        Schema::dropIfExists('fun_run_registrations');
    }
}
