<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMerkToTbldatabarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('tbldatabarang', function (Blueprint $table) {
            $table->unsignedBigInteger("merk")->after("nama");
            $table->foreign('merk')
                    ->references('id')
                    ->on('tblmerk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbldatabarang', function (Blueprint $table) {
            $table->dropColumn('merk');
            $table->dropForeign('tbldatabarang_merk_foreign');
        });
    }
}
