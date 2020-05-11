<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Старт миграций.
     *
     * @return void
     */
    public function up(){
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            // $table->date('bierthday');
            $table->float('weight');
            $table->float('height');
            $table->timestamps();
        });
    }


    /**
     * Отмена действий.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('accounts');
    }
}
