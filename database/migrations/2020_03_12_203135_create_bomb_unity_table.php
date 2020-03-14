<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBombUnityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bomb_unity', function (Blueprint $table) {
            $table->integer('unity_id')->unsigned();
            $table->integer('bomb_id')->unsigned();

            $table->foreign('bomb_id')
                ->references('id')
                ->on('bombs')
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
        Schema::dropIfExists('bomb_unity');
    }
}
