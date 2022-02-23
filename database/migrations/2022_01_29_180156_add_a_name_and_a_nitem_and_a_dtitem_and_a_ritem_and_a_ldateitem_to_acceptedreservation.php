<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddANameAndANitemAndADtitemAndARitemAndALdateitemToAcceptedreservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acceptedreservation', function (Blueprint $table) {
            $table->string('a_name')->nullable();
            $table->string('a_nitem')->nullable();
            $table->string('a_dtitem')->nullable();
            $table->string('a_ritem')->nullable();
            $table->string('a_ldateitem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acceptedreservation', function (Blueprint $table) {
            $table->dropColumn(['a_name', 'a_nitem' , 'a_dtitem' , 'a_ritem', 'a_ldateitem']);
        });
    }
}
