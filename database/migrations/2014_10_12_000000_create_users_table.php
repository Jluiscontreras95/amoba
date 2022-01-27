<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->char('phone_number')->nullable();
            $table->char('picture')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->dateTime('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->string('new_email')->nullable();
            $table->integer('status')->nullable();
            $table->integer('first')->nullable();
            $table->string('last_accept_date')->nullable();
            $table->dateTime('created')->nullable();
            $table->dateTime('modified')->nullable();
            $table->char('company_contact')->nullable();
            $table->decimal('credits')->nullable();
            $table->integer('first_trip')->nullable();
            $table->boolean('incomplete_profile')->nullable();
            $table->boolean('phone_verify')->nullable();
            $table->string('token_auto_login')->nullable();
            $table->integer('user_vertical')->nullable();
            $table->integer('language_id')->references('id')->on('languages')->onDelete('cascade')->nullable();
            $table->boolean('no_registered')->nullable();
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();


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
