<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments("id");
            $table->string("category");
            $table->string("classification");

            $table->integer('id_saurcers')->unsigned();
            $table->foreign('id_saurcers')->references('id')->
            on('saurcers')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_drinks')->unsigned();
            $table->foreign('id_drinks')->references('id')->
            on('saurcers')->onDelete('cascade')->onUpdate('cascade');





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
        Schema::dropIfExists('menus');
    }
}
