<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        \DB::table('password_resets')->insert(['email' => 'fuss-fuss-fuss@yandex.ru', 'token' => '$2y$10$/JUizRvS..TWZ/TEDLbyae8AINTaDY0VF8r.fdtLXWV6QBx0ZmCY.', 'created_at' => '2018-09-06 14:14:08']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
