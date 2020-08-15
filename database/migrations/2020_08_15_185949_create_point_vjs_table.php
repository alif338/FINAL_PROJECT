<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointVjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_vjs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jawaban_id')->unsigned();
            $table->integer('jumlah_upvote')->default(0);
            $table->integer('jumlah_downvote')->default(0);
            $table->integer('jawaban_relevan')->default(0);
            $table->integer('point');
            $table->timestamps();

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
        Schema::dropIfExists('point_vjs');
    }
}
