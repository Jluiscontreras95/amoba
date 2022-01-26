<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('currency_id');
            $table->integer('next_user_plan_id')->nullable();
            $table->dateTime('start_timestamp')->nullable();
            $table->dateTime('end_timestamp')->nullable();
            $table->dateTime('renewal_timestamp')->nullable();
            $table->decimal('renewal_price');
            $table->boolean('requires_invoice');
            $table->integer('status');
            $table->dateTime('created');
            $table->dateTime('modified');
            $table->boolean('financiation');
            $table->boolean('status_financiation');
            $table->char('language');
            $table->char('nif')->nullable();
            $table->text('business_name');
            $table->boolean('pending_payment');
            $table->integer('date_max_payment')->nullable();
            $table->dateTime('proxim_start_timestamp')->nullable();
            $table->dateTime('proxim_end_timestamp')->nullable();
            $table->dateTime('proxim_renewal_timestamp')->nullable();
            $table->dateTime('proxim_renewal_price')->nullable();
            $table->decimal('credits_return');
            $table->integer('company_id');
            $table->boolean('cancel_employee');
            $table->boolean('force_renovation');
            $table->dateTime('date_canceled')->nullable();
            $table->boolean('amount_confirm_canceled')->nullable();
            $table->boolean('credit_confirm_canceled')->nullable();
            $table->integer('cost_center_id');
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
        Schema::dropIfExists('user_plans');
    }
}
