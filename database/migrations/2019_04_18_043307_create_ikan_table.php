<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikan', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->string('video_ikan');
            $table->string('Jenis_Ikan');
            $table->string('berat_ikan');
            $table->bigInteger('harga_bid');
            $table->timestamps();
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
        Schema::dropIfExists('ikan');
    }
}
