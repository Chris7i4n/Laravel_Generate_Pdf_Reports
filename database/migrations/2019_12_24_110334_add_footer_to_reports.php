<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFooterToReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {

            $table->string('footer_logo_1');
            $table->string('footer_logo_2');
            $table->string('footer_logo_3');
            $table->string('footer_social_reason');
            $table->string('footer_address');
            $table->string('footer_phone');
            $table->string('footer_site');


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
