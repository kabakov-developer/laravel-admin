<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
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
            $table->boolean('status_success')->nullable();
            $table->boolean('status_error')->nullable();
            $table->boolean('status_awaiting')->nullable();
            $table->string('currency');
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->bigInteger('card_number');
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
        Schema::dropIfExists('payments');
    }
}


