<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('description');
            $table->string('status');
			$table->string('category');
			$table->string('lang');
        });
		Schema::create('category',function (Blueprint $table){
			$table->increments('id');
			$table->string('title')->unique();
			$table->string('slug');
			$table->string('lang');
		});
		Schema::create('ingredients',function (Blueprint $table){
			$table->increments('id');
			$table->string('mealTitle');
			$table->string('title');
			$table->string('slug');
			$table->string('lang');
		});	
		Schema::create('translation',function(Blueprint $table){
			$table->increments('id');
			$table->string('lang');
			$table->string('word');
			$table->string('translation');
		});
		Schema::create('languages',function(Blueprint $table){
			$table->increments('id');
			$table->string('lang')->unique();
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal');
		Schema::dropIfExists('category');
		Schema::dropIfExists('ingredients');
    }
}
