<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivity1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity1s', function (Blueprint $table) {
            $table->id();
            $table->string('activityname');
            $table->string('activitydate');
            $table->string('date_finished');
            $table->string('activitydescription');
            $table->string('activitycode');
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
        Schema::dropIfExists('activity1s');
    }
}
