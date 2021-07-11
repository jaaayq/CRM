<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedback2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback2s', function (Blueprint $table) {
            $table->id();
            $table->string('feedbackcompanyname');
            $table->string('feedbackdate');
            $table->string('feedbackaddress');
            $table->string('feedbacktelephone');
            $table->string('feedbackemail');
            $table->string('feedbackgender');
            $table->string('feedbacknature');
            $table->string('feedbackyesno1');
            $table->string('feedbackserviceavailed1');
            $table->string('feedbackserviceavailed2');
            $table->string('feedbackconsultancy');
            $table->string('feedbackpackaging');
            $table->string('feedbackscholarship');
            $table->string('feedbackconversion');
            $table->string('feedbackmanagement');
            $table->string('feedbackmanagementspecify');
            $table->string('t1');
            $table->string('t2');
            $table->string('AOS1');
            $table->string('AOS2');
            $table->string('QOS1');
            $table->string('QOS2');
            $table->string('UTM1');
            $table->string('CTT1');
            $table->string('RIP1');
            $table->string('SAT1');
            $table->string('SAT2');
            $table->string('feedbackrank1');
            $table->string('feedbackrank2');
            $table->string('feedbackrank3');
            $table->string('feedbackrank4');
            $table->string('feedbackrank5');
            $table->string('feedbackexp1');
            $table->string('feedbackexp2');
            $table->string('feedbackexp3');
            $table->string('feedbacksuggest');
            $table->string('feedbacksignature');
            $table->string('feedbackdesignation');
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
        Schema::dropIfExists('feedback2');
    }
}
