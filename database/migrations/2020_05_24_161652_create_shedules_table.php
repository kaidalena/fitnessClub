<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shedules', function (Blueprint $table) {
            $table->id();
            $table->time('time');
            $table->bigInteger('mondey')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('tuesday')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('wednesday')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('thursday')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('friday')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('satuday')->default(null)->attributes('UNSIGNED');
            $table->bigInteger('sunday')->default(null)->attributes('UNSIGNED');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shedules');
    }
}
