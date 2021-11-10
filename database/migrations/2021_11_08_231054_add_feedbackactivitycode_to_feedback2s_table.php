<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeedbackactivitycodeToFeedback2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedback2s', function (Blueprint $table) {
            $table->string('feedbackactivitycode')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedback2s', function (Blueprint $table) {
        $table->dropColumn('feedbackactivitycode');
        });
    }
}
