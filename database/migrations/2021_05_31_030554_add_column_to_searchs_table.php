<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToSearchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('searchs', function (Blueprint $table) {
            $table->string('salary')->nullable()->after('address');
            $table->string('experience')->nullable()->after('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('searchs', function (Blueprint $table) {
            $table->dropColumn('salary');
            $table->dropColumn('experience');
        });
    }
}
