<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('job_details', function (Blueprint $table) {
        $table->increments('id');
        $table->string('salary')->nullable();
        $table->string('experience')->nullable();
        $table->text('education')->nullable();
        $table->integer('quantity')->nullable();
        $table->string('position')->nullable();
        $table->string('gender')->nullable();
        $table->string('age')->nullable();
        $table->string('expiration_date')->nullable();
        $table->text('job_description')->nullable();
        $table->text('benefit')->nullable();
        $table->text('other_requirement')->nullable();

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
        Schema::dropIfExists('job_details');
    }
}
