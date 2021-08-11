<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('t_address');
            $table->text('t_body');
            $table->string('c_name', 100);
            $table->string('c_name1', 100);
            $table->string('journalist', 100);
            $table->string('corrector', 100);
            $table->integer('t_folg');
            $table->integer('d_folg');
            $table->integer('c_folg');
            $table->integer('c_folg1');
            $table->integer('d_mark');

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
        Schema::dropIfExists('topic');
    }
}
