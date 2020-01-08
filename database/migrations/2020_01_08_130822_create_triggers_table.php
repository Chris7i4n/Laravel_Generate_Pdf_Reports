<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triggers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('initials');
            $table->string('localization');
            $table->string('question_01');
            $table->string('question_02');
            $table->string('question_03');
            $table->string('question_04');
            $table->string('question_05');
            $table->string('question_06');
            $table->string('question_07');
            $table->string('question_08');
            $table->string('question_09');
            $table->string('question_10');
            $table->string('note');




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
        Schema::dropIfExists('triggers');
    }
}
