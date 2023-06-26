<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("type");
            $table->string("main_ingredients");
            $table->string("price");
            $table->string("comments");
            $table->string("characteristics");

            $table->integer("id_customers")->unsigned();
            $table->foreign("id_customers")->references("id")->
            on("ingredients")->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('drinks');
    }
}
