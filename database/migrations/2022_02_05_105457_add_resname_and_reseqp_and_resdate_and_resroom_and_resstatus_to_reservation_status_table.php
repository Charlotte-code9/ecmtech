<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResnameAndReseqpAndResdateAndResroomAndResstatusToReservationStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation_status', function (Blueprint $table) {
            $table->string('resname')->nullable();
            $table->string('reseqp')->nullable();
            $table->string('resdate')->nullable();
            $table->string('resroom')->nullable();
            $table->string('resstatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation_status', function (Blueprint $table) {
            $table->dropColumn(['resname','reseqp','resdate','resroom','resstatus']);
        });
    }
}
