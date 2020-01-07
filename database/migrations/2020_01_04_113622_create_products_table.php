<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('action');
            $table->boolean('arcade');
            $table->boolean('adventure');
            $table->boolean('platformer');
            $table->boolean('puzzle');
            $table->boolean('rpg');
            $table->boolean('racing');
            $table->boolean('strategy');
            $table->boolean('ps4');
            $table->boolean('ps3');
            $table->boolean('xbox_one');
            $table->boolean('xbox_360');
            $table->boolean('pc');
            $table->boolean('nintendo_switch');
            $table->text('description');
            $table->text('path');
            $table->integer('stock')->default(0);
            $table->float('rating');
            $table->float('price');
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
        Schema::dropIfExists('products');
    }
}
