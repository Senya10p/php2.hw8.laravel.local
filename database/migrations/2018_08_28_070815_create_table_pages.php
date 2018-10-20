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

        \DB::table('pages')->insert(['content' => 'Сайт посвящён писателю Виктору Пелевину', 'alias' => 'index', 'title' => 'Добро пожаловать!']);
        \DB::table('pages')->insert(['content' => 'Виктор Олегович Пелевин родился 22 ноября 1962 года в Москве', 'alias' => 'biography', 'title' => 'Биография Виктора Пелевина']);
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
