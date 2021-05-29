<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->increments('pinjam_id');
            $table->string('buku_id', 30);
            $table->integer('anggota_id');
            $table->string('tgl__pinjam', 100);
            $table->string('tgl_jatuh_tempo', 20);
            });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam');
    }
}
