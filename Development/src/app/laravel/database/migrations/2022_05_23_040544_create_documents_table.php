<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); //資料ID
            $table->bigInteger('isbn'); //ISBN番号
            $table->string('title'); //資料名
            $table->foreignId('category_id'); //分類コード
            $table->string('author',50); //著者名
            $table->string('publisher'); //出版社名
            $table->date('published')->nullable(); //出版日
            $table->timestamps(); //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
