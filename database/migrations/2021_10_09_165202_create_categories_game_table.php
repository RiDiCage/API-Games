<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesGameTable extends Migration
{
    public function up()
    {
        Schema::create('categories_game', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('game_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories_game');
    }
}
