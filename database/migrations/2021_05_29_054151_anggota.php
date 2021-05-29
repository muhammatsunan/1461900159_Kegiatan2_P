<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('anggota_id');
            $table->string('anggota_nama', 30);
            $table->string('anggota__alamat', 30);
            $table->string('anggota__jk', 2);
            $table->string('anggota__telp', 12);
            });      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
