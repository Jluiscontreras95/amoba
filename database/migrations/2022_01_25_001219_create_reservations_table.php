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
            $table->integer('user_plan_id')->nullable();
            $table->integer('route_id')->nullable();
            $table->integer('track_id')->nullable();
            $table->char('reservation_start')->nullable();
            $table->char('reservation_end')->nullable();
            $table->integer('route_stop_origin_id');
            $table->integer('route_stop_destination_id');
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
