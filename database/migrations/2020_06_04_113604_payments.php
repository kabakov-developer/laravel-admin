<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('payments', function (Blueprint $table) {
            $table->id()->unique();
            $table->float('payment_amount', 10, 2);
            $table->boolean('status_success');
            $table->boolean('status_error');
            $table->boolean('status_awaiting');
            $table->string('currency');
            $table->string('email');
            $table->string('phone');
            $table->integer('card_number');
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
        //
    }
}
