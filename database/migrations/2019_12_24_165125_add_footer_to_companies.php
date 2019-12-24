<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFooterToCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('footer_logo_1')->nullable();
            $table->string('footer_logo_2')->nullable();
            $table->string('footer_logo_3')->nullable();
            $table->string('footer_logo_4')->nullable();
            $table->string('footer_social_reason')->nullable();
            $table->string('footer_site')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
