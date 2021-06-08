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
            $table->string('name', 100)->comment('name of user/manager');
            $table->string('email', 100)->unique()->comment('email of user/manager');
            $table->string('phone', 25)->unique()->comment('phone of user/manager');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 256)->comment('password of user/manager');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
