<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donationschedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donor_id')->nullable();
            $table->date('desired_schedule')->nullable();
            $table->date('schedule')->nullable();
            $table->string('confirmed')->nullable();
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donationschedules');
    }
}
