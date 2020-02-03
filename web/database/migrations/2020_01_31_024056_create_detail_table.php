<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('tbldatabarang');
            $table->string('procie');
            $table->enum('ram',['2','4','8','8on','16']);
            $table->string('tipe');
            $table->enum('ssd',['none','120','240','480','512','1']);
            $table->enum('hdd',['none','250','320','500','1']);
            $table->string('display');
            $table->string('network');
            $table->string('baterai');
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
        Schema::dropIfExists('tbldetail');
    }
}
