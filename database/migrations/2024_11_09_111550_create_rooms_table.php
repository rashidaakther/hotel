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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('details');
            $table->string('bed_type');
            $table->string('floor');
            $table->double('price')->default(0)->nullable();
            $table->text('featurs')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('gallery')->nullable();
            $table->tinyInteger('is_active')->default(1)->nullable()->comment('1=active,2=inactive');
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
        Schema::dropIfExists('rooms');
    }
};
