<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
            $table->id(); //貸出ID
            $table->foreignId('user_id'); //会員ID
            $table->foreignId('document_id'); //資料ID
            $table->timestamps(); //貸出年月日はcreated_at
            $table->date('return_date'); //返却期日
            $table->date('finishing_date')->nullable(); //返却年月日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lendings');
    }
}
