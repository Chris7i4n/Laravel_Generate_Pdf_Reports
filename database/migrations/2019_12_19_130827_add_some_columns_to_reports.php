<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->date('data_first_revision');
            $table->string('description_first_revision');
            $table->string('first_inspector_first_revision');
            $table->string('second_inspector_first_revision');
            $table->string('elaborator_first_revision');
            $table->string('approved_for_first_revision');

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
