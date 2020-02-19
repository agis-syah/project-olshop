<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblreturnbrg', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idcustomer');
            $table->string('idbeli');
            $table->string('idbrg');
            $table->string('namabrg');
            $table->date('tgl');
            $table->string('jlh');
            $table->string('kondisi');
            $table->string('resi');
            $table->string('filename');
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
        Schema::dropIfExists('tblreturnbrg');
    }
}