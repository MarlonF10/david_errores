<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaurcersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saurcers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("type");
            $table->string("main_ingredients");
            $table->string("price");
            $table->string("comments")->nullable();
            $table->string("characteristics");

            $table->integer("id3")->unsigned();
            $table->foreign("id3")->references("id")->on("ingredients")
            -> onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('saurcers');
    }
}
