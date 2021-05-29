<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Petugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('petugas_id');
            $table->string('petugas_nama', 30);
            $table->string('username', 30);
            $table->string('buku__deskripsi', 100);
            $table->string('password', 20);
            });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
