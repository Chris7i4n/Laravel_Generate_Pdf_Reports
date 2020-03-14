<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerUnityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trigger_unity', function (Blueprint $table) {
            $table->integer('unity_id')->unsigned();
            $table->integer('trigger_id')->unsigned();

            $table->foreign('trigger_id')
                ->references('id')
                ->on('triggers')
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
        Schema::dropIfExists('trigger_unity');
    }
}
