<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_vs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pertanyaan_id')->unsigned();
            $table->integer('jumlah_upvote');
            $table->integer('jumlah_downvote');
            $table->integer('jumlah_jawaban_relevan');
            $table->integer('point');
            $table->timestamps();

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_vs');
    }
}
