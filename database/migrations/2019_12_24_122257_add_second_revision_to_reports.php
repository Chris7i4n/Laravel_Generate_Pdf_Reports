<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSecondRevisionToReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->date('data_second_revision')->nullable();
            $table->string('description_second_revision')->nullable();
            $table->string('first_inspector_second_revision')->nullable();
            $table->string('second_inspector_second_revision')->nullable();
            $table->string('elaborator_second_revision')->nullable();
            $table->string('approved_for_second_revision')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            //
        });
    }
}
