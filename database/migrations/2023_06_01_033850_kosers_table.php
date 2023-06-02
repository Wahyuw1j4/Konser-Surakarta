<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KosersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konser', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');            
            $table->string('lokasi');
            $table->string('tanggal');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->string('poster');
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
        Schema::dropIfExists('konser');
    }
}
