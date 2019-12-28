<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReviewedForToReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {

            $table->string('reviewed_for');
            $table->string('reviewed_for_function');
            $table->string('first_inspector_function_first_revision');
            $table->string('second_inspector_function_first_revision');
            $table->string('elaborator_function_first_revision');
            $table->string('approved_for_function_first_revision');

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
