<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle'); 
            $table->string('resume');
            $table->timestamps();
        });
         Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre'); 
            $table->string('resume');
            $table->string('categorie');
            $table->string('image');
            $table->timestamps();
        });
         Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');            
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
        Schema::dropIfExists('todos');
    }
}
