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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->DATETIME('departure_time');
            $table->DATETIME('arrival_time');
            $table->integer('train_code')->unique();
            $table->integer('carriages_number', 12);
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(false);

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
        Schema::dropIfExists('trains');
    }
};
