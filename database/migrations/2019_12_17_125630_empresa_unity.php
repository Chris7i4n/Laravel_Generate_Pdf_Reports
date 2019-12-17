<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpresaUnity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_unity', function (Blueprint $table) {
            $table->integer('empresa_id')->unsigned();
            $table->integer('unity_id')->unsigned();

            $table->foreign('empresa_id')
                ->references('id')->on('empresas')
                ->onDelete('cascade');

            $table->foreign('unity_id')
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
