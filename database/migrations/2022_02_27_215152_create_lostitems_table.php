<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostitems', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('borrower_name')->nullable();
            $table->dateTime('b_date')->nullable();
            $table->string('b_item')->nullable();
            $table->string('b_room')->nullable();
            $table->integer('qty')->nullable();
            $table->dateTime('r_date')->nullable();
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
        Schema::dropIfExists('lostitems');
    }
}
