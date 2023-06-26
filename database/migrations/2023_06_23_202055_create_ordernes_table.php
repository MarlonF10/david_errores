<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdernesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordernes', function (Blueprint $table) {
            $table->increments("id");

            $table->integer("id_saurcers")->unsigned();
            $table->foreign("id_saurcers")->references('id')->
            on('saurcers')->onDelete('cascade')->onUpdate('cascade');


            $table->integer("id_drinks")->unsigned();
            $table->foreign("id_drinks")->references("id")->
            on("drinks")->onDelete("cascade")->onUpdate("cascade");


            $table->integer("id_customers")->unsigned();
            $table->foreign("id_customers")->references("id")->
            on("customers")->onDelete("cascade")->onUpdate("cascade");




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
        Schema::dropIfExists('ordernes');
    }
}
