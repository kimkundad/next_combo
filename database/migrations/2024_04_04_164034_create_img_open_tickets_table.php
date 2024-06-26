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
        Schema::create('img_open_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('img')->nullable();
            $table->string('code_ticket')->nullable();
            $table->string('code_ticket')->nullable();
            $table->integer('open_ticket_id')->default('0');
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
        Schema::dropIfExists('img_open_tickets');
    }
};
