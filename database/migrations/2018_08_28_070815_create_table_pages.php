<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias');
            $table->text('title');
            $table->text('content');
            $table->timestamps();
        });

        \DB::table('pages')->insert(['content' => 'Hello', 'alias' => 'index', 'title' => 'Заголовок1']);
        \DB::table('pages')->insert(['content' => 'Hello! biography', 'alias' => 'biography', 'title' => 'Заголовок2']);
        \DB::table('pages')->insert(['content' => 'Hello! books', 'alias' => 'books', 'title' => 'Заголовок3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
