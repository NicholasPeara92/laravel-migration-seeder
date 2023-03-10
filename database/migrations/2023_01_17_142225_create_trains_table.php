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
            $table->string('company', 100); 
            $table->string('departure_station', 150); 
            $table->string('arrival_station', 150); 
            $table->dateTime('departure_time'); 
            $table->dateTime('arrival_time'); 
            $table->string('train_code', 5); 
            $table->tinyInteger('carriages_num')->nullable(); 
            $table->boolean('in_time')->default(1); 
            $table->boolean('is_cancelled')->default(0);
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
