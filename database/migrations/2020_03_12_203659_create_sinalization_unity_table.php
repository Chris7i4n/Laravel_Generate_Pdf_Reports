<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinalizationUnityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinalization_unity', function (Blueprint $table) {
            $table->integer('unity_id')->unsigned();
            $table->integer('sinalization_id')->unsigned();

            $table->foreign('sinalization_id')
                ->references('id')
                ->on('sinalizations')
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
        Schema::dropIfExists('sinalization_unity');
    }
}
