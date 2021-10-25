<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusColumnInActivity1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activity1s', function (Blueprint $table) {
            $table->tinyInteger('act_status')->default(1)->after('activitycode');
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
            $table->dropColumn('act_status');
        });
    }
}
