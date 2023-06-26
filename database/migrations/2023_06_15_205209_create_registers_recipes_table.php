<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers_recipes', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name_recipe");
            $table->string("recipe");
            $table->string("type_recipe");
            $table->string("description");

            $table->integer("id2")->unsigned();
            $table->foreign("id2")->references("id")->
            on("restaurants")->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('registers_recipes');
    }
}
