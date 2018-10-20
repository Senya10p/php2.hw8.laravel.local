<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('alias');
            $table->string('book');
            $table->string('year');
            $table->string('img');
            $table->integer('category_id')->unsigned()->default(1);

            $table->index('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        \DB::table('books')->insert(['alias' => '2018-09-07_231711','book' => 'Омон Ра', 'year' => '1992', 'img' => 'images/books/2018-09-07_231711.jpg', 'category_id' => 1]);
        \DB::table('books')->insert(['alias' => '2018-09-08_075847','book' => 'Жизнь насекомых', 'year' => '1993', 'img' => 'images/books/2018-09-08_075847.jpg', 'category_id' => 2]);
        \DB::table('books')->insert(['alias' => '2018-09-08_085028','book' => 'Чапаев и Пустота', 'year' => '1996', 'img' => 'images/books/2018-09-08_085028.jpg', 'category_id' => 1]);
        \DB::table('books')->insert(['alias' => '2018-09-08_101021','book' => 'Generation «П»', 'year' => '1999', 'img' => 'images/books/2018-09-08_101021.jpg', 'category_id' => 1]);
        \DB::table('books')->insert(['alias' => '2018-09-08_101946','book' => 'Числа', 'year' => '2003', 'img' => 'images/books/2018-09-08_101946.jpg', 'category_id' => 3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
