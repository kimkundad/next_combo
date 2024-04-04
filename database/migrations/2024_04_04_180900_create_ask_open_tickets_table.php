<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_open_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_orders_id')->default('0');
            $table->integer('user_id')->default('0');
            $table->integer('ark1')->default('0');
            $table->integer('ark2')->default('0');
            $table->integer('ark3')->default('0');
            $table->integer('ark4')->default('0');
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
        Schema::dropIfExists('ask_open_tickets');
    }
};
