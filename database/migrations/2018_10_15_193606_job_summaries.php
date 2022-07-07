<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobSummaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('job_summaries', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('description');
        $table->integer('category_id');
        $table->integer('company_id');
        $table->integer('address_id')->default(1);
        $table->integer('user_id')->default(2);
        $table->integer('job_detail_id')->unsigned()->nullable();
        
        $table->timestamps();
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
        Schema::dropIfExists('job_summaries');
    }
}
