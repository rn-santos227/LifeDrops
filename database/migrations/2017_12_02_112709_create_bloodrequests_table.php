<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodrequests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipient_id');
            $table->string('location');
            $table->text('message');
            $table->string('blood_type');
            $table->double('size');
            $table->string('status')->default('pending');
            $table->string('donor');
            $table->string('donor_type');
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
        Schema::dropIfExists('bloodrequests');
    }
}
