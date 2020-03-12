<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHydrantUnityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydrant_unity', function (Blueprint $table) {
            $table->integer("unity_id")->unsigned();
            $table->integer("hydrant_id")->unsigned();
            
            $table->foreign('unity_id')
                ->references('id')->on('unities')
                ->onDelete('cascade');
            
            $table->foreign('hydrant_id')
                ->references('id')
                ->on('hydrants')
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
        Schema::dropIfExists('hydrant_unity');
    }
}
