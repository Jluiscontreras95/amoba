<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_plan_id')->references('id')->on('user_plans')->onDelete('cascade')->nullable();
            $table->integer('route_id')->references('id')->on('routes')->onDelete('cascade')->nullable();
            $table->integer('track_id')->references('id')->on('tracks')->onDelete('cascade')->nullable();
            $table->char('reservation_start')->nullable();
            $table->char('reservation_end')->nullable();
            $table->integer('route_stop_origin_id')->references('id')->on('routes_stop_origin')->onDelete('cascade')->nullable();
            $table->integer('route_stop_destination_id')->references('id')->on('routes_stop_destination')->onDelete('cascade')->nullable();
            $table->timestamps();
            $table->char('deleted_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
