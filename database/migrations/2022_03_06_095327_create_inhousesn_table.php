<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInhousesnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhousesn', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('company');
            $table->string('bosyuu');
            $table->text('lang')->nullable();
            $table->text('overview')->nullable();
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
        Schema::dropIfExists('inhousesn');
    }
}
