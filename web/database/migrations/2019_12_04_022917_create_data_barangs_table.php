<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldatabarang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('merk');
            $table->string('nama');
            $table->enum('jenis',['l','k','g']);
            $table->string('stok');
            $table->string('harga');
            $table->string('detail');
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
        Schema::dropIfExists('tbldatabarang');
    }
}
