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
            $table->string('steam_id', 64)->nullable();
            $table->string('username', 100)->unique();
            $table->string('avatar', 250)->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->string('password', 100)->nullable();
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->string('last_ip', 64)->nullable();
            $table->timestamp('last_login')->nullable();
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
