<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('logo');
            $table->string('company');
            $table->string('address');
            $table->integer('cnpj');
            $table->integer('phone');
            $table->string('tecnical_reponsable')->nullable();
            $table->string('contracting_responsable')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
