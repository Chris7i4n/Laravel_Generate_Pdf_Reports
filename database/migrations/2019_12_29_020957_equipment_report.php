<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EquipmentReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_report', function (Blueprint $table) {

            $table->integer('report_id')->unsigned();
            $table->integer('equipment_id')->unsigned();

            $table->foreign('report_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');

            $table->foreign('equipment_id')
                ->references('id')->on('unities')
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
        //
    }
}
