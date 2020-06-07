<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->date('birthday');
            $table->float('weight');
            $table->float('height');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->rememberToken();
            $table->string('foto')->default('/storage/users_fotos/default.jpg');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
        });

        Schema::create('visits', function (Blueprint $table) {
            $table->bigInteger('user')->attributes('UNSIGNED');
            $table->dateTime('date');
            $table->bigInteger('training_group')->attributes('UNSIGNED');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
