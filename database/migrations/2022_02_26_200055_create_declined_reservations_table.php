<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclinedReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declined_reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('item_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->dateTime('res_date')->nullable();
            $table->string('room')->nullable();
            $table->string('status')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('declined_reservations');
    }
}
