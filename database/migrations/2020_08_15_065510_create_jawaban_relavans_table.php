<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanRelavansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_relavans', function (Blueprint $table) {
            $table->bigInteger('pertanyaan_id')->unsigned();
            $table->bigInteger('jawaban_id')->unsigned();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_relavans');
    }
}
