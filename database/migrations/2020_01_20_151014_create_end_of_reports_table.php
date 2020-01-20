<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndOfReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('end_of_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('end_of_report_description');
            $table->string('end_of_report_pages');
            $table->string('end_of_report_localization');
            $table->string('end_of_report_signature');
            $table->string('end_of_report_employee_name');
            $table->string('end_of_report_employee_function_1');
            $table->string('end_of_report_employee_function_2')->nullable();
            $table->string('end_of_report_employee_crea');

            $table->integer('report_id')->unsigned();
            $table->foreign('report_id')
                ->references('id')->on('reports')
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
        Schema::dropIfExists('end_of_reports');
    }
}
