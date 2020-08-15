<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownvotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downvotes', function (Blueprint $table) {
            $table->bigInteger('pertanyaan_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downvotes');
    }
}
