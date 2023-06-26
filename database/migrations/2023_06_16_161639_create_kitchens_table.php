<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKitchensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchens', function (Blueprint $table) {
            $table->increments("id");
            $table->string("n_cooks");
            $table->string("n_waiters");

            $table->integer("id_recipes")->unsigned();
            $table->foreign("id_recipes")->references("id")->
            on("registers_recipes")->onDelete("cascade")->onUpdate("cascade");

            $table->integer("id_menus")->unsigned();
            $table->foreign("id_menus")->references("id")->
            on("menus")->onDelete("cascade")->onUpdate("cascade");

            $table->integer("id_utencils")->unsigned();
            $table->foreign("id_utencils")->references("id")->
            on("utencils")->onDelete("cascade")->onUpdate("cascade");
            
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
        Schema::dropIfExists('kitchens');
    }
}
