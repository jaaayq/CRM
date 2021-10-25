<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity1s', function (Blueprint $table) {
            $table->string('date_finished')->after('activitydate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity1s', function (Blueprint $table) {
            $table->dropColumn('date_finished');
        });
    }
}
