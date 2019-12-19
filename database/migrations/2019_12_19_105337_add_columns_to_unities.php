<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUnities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unities', function (Blueprint $table) {
            $table->string('address');
            $table->integer('cnpj');
            $table->integer('phone');
            $table->string('contracting_responsable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unities', function (Blueprint $table) {
            //
        });
    }
}
