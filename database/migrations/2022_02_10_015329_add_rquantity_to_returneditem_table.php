<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRquantityToReturneditemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('returneditem', function (Blueprint $table) {
            $table->integer('rquantity')->after('rroom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('returneditem', function (Blueprint $table) {
            $table->dropColumn('rquantity');//
        });
    }
}
