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
        Schema::create('ticket_orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_ticket')->nullable();
            $table->string('name_ticket')->nullable();
            $table->integer('open_ticket')->default('0');
            $table->integer('add_ticket')->default('0');
            $table->integer('close_ticket')->default('0');
            $table->integer('ask_id')->default('0');
            $table->integer('user_id')->default('0');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('ticket_orders');
    }
};
