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
        Schema::create('open_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name_ticket')->nullable();
            $table->string('age_ticket')->nullable();
            $table->string('sex_ticket')->nullable();
            $table->string('breed_ticket')->nullable();
            $table->string('other_breed_ticket')->nullable();
            $table->string('disease_ticket')->nullable();
            $table->string('other_disease_ticket')->nullable();
            $table->string('objective_ticket')->nullable();
            $table->string('other_objective_ticket')->nullable();
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
        Schema::dropIfExists('open_tickets');
    }
};
