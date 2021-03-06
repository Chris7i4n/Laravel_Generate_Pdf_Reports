<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecomendationReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recomendation_report', function (Blueprint $table) {
            $table->integer('report_id')->unsigned();
            $table->integer('recomendation_id')->unsigned();

            $table->foreign('report_id')
                ->references('id')->on('reports')
                ->onDelete('cascade');

            $table->foreign('recomendation_id')
                ->references('id')->on('recomendations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recomendation_report');
    }
}
