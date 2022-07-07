<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CvApply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cv_apply', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('job_summary_id');
            $table->string('cv');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('cv_apply');
    }
}
