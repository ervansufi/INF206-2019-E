<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lelang_id')->unsigned();
            $table->bigInteger('user_id');
            $table->string('nama_lelang');
            $table->bigInteger('harga_lelang');
            $table->timestamps();
            $table->foreign('lelang_id')->references('id')->on('ikans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
