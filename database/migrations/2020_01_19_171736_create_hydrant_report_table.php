<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHydrantReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydrant_report', function (Blueprint $table) {
            $table->integer('report_id')->unsigned();
            $table->integer('hydrant_id')->unsigned();

            $table->foreign('report_id')
                ->references('id')->on('reports')
                ->onDelete('cascade');

            $table->foreign('hydrant_id')
                ->references('id')->on('hydrants')
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
        Schema::dropIfExists('hydrant_report');
    }
}
