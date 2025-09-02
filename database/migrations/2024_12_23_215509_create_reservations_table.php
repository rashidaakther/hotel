<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('address');
            $table->string('check_in_date');
            $table->string('room_type');
            $table->string('number_of_person');
            $table->string('special_comments');
            $table->string('check_out_date');
            $table->string('number_of_room');
            $table->string('number_of_children');
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
        Schema::dropIfExists('reservations');
    }
};
