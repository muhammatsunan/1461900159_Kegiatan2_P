<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kembali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembali', function (Blueprint $table) {
            $table->increments('kembali_id');
            $table->integer('pinjam_id');
            $table->string('tgl__kembali', 100);
            $table->string('denda', 100);
            });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kembali');
    }
}
