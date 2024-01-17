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
            $table->string('username',100);
            $table->string('Email',100);
            $table->string('password',100);
            $table->string('phone',100)->nullable();
            $table->integer('age')->nullable();
            $table->string('gender',100)->nullable();
            $table->text('address')->nullable();
            $table->string('img',100)->nullable();
            $table->string('Role',100);
            $table->string('access_toke',100)->nullable();
            $table->boolean('is_admin')->default(0);
            $table->string('Allergy',100)->nullable();
            $table->boolean('Chronic_Disease')->default(0);
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
