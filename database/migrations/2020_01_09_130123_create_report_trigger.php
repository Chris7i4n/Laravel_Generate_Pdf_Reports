<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_trigger', function (Blueprint $table) {
            $table->integer('report_id')->unsigned();
            $table->integer('trigger_id')->unsigned();

            $table->foreign('report_id')
                ->references('id')->on('reports')
                ->onDelete('cascade');

            $table->foreign('trigger_id')
                ->references('id')->on('triggers')
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
        Schema::dropIfExists('report_trigger');
    }
}
