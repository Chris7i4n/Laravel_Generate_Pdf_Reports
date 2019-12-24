<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThirdRevisionToReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->date('data_third_revision')->nullable();
            $table->string('description_third_revision')->nullable();
            $table->string('first_inspector_third_revision')->nullable();
            $table->string('second_inspector_third_revision')->nullable();
            $table->string('elaborator_third_revision')->nullable();
            $table->string('approved_for_third_revision')->nullable();
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
