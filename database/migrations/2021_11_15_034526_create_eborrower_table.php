<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEborrowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eborrower', function (Blueprint $table) {
            $table->id();
            $table->integer('idnum');
            $table->string('bname');
            $table->string('bdept');
            $table->string('btype');
            $table->string('byrsec');
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
        Schema::dropIfExists('eborrower');
    }
}
