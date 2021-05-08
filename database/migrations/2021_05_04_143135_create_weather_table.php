<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
          $table->id();
          $table->string('location', 30);
          $table->decimal('wind', 20);
          $table->decimal('uv', 20);
          $table->decimal('temperature', 20);
          $table->decimal('cloud', 20);
          $table->decimal('humidity', 20);
          $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather');
    }
}
