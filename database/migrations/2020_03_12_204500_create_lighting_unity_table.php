<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLightingUnityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lighting_unity', function (Blueprint $table) {
            $table->integer('unity_id')->unsigned;
            $table->integer('lighting_id')->unsigned;

            $table->foreign('lighting_id')
                ->references('id')
                ->on('lightings')
                ->onDelete('cascade');
            
            $table->foreign('unity_id')
                ->references('id')
                ->on('unities')
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
        Schema::dropIfExists('lighting_unity');
    }
}
