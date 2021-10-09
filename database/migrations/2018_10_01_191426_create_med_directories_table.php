<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_directories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('med_name')->nullable();
            $table->string('mg_ml')->nullable();
            $table->string('mfg_name')->nullable();
            $table->string('content')->nullable();
            $table->string('MRP')->nullable();
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
        Schema::dropIfExists('med_directories');
    }
}
