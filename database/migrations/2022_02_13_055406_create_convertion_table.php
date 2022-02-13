<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvertionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convertion', function (Blueprint $table) {
            $table->id();
            $table->float('rate', 8, 3);
            $table->foreignId('device_id_1')->constrained('devices')->cascadeOnDelete();
            $table->foreignId('device_id_2')->constrained('devices')->cascadeOnDelete();
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
        Schema::dropIfExists('convertion');
    }
}
