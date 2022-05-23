<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); //予約ID
            $table->foreignId('user_id'); //会員ID
            $table->bigInteger('isbn'); //ISBN番号
            $table->foreignId('document_id')->nullable(); //確保済み資料ID
            $table->timestamps(); //予約年月日はcreated_atで取得
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
