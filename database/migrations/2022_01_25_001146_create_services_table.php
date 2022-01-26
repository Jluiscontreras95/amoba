<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->integer('id');
            $table->char('external_id')->references('id')->on('external')->onDelete('cascade')->nullable();
            $table->char('external_budget_id')->references('id')->on('budget')->onDelete('cascade')->nullable();
            $table->char('external_route_id')->references('id')->on('external_route')->onDelete('cascade')->nullable();
            $table->integer('track_id')->references('id')->on('track')->onDelete('cascade')->nullable();
            $table->text('name',50)->nullable();
            $table->text('notes',300)->nullable();
            $table->timestamp('timestamp');
            $table->char('arrival_address');
            $table->timestamp('arrival_timestamp');
            $table->char('departure_address');
            $table->timestamp('departure_timestamp');
            $table->integer('capacity');
            $table->integer('confirmed_pax_count');
            $table->timestamp('reported_departure_timestamp')->nullable();
            $table->integer('reported_departure_kms')->nullable();
            $table->timestamp('reported_arrival_timestamp')->nullable();
            $table->integer('reported_arrival_kms')->nullable();
            $table->char('reported_vehicle_plate_number')->nullable();
            $table->char('status');

            //"status_info" : "{\"driver\": false, \"vehicle\": false, \"readings\": false, \"tracking\": false, \"ended_late\": false, \"play_service\": false, \"started_late\": false, \"stop_service\": false}",

            $table->integer('reprocess_status');
            $table->integer('return');
            $table->timestamp('created');
            $table->timestamp('modified');
            $table->char('synchronized_downstream')->nullable();
            $table->char('synchronized_upstream')->nullable();
            $table->integer('province_id')->references('id')->on('province')->onDelete('cascade')->nullable();
            $table->integer('sale_tickets_drivers');
            $table->text('notes_drivers',100)->nullable();
            $table->text('itinerary_drivers',100);
            $table->char('cost_if_externalized')->nullable();

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
        Schema::dropIfExists('services');
    }
}
