<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameHargaToHargaSatuanInPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            //
            $table->renameColumn('harga', 'harga_satuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            //
            $table->renameColumn('harga_satuan', 'harga');
        });
    }
}
