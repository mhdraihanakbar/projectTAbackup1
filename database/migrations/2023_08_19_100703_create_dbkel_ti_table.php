<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbkelTiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbkel_ti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->string('id_tipe');
            $table->integer('id_kodebarang')->unsigned();
            $table->string('tahunperolehan');
            $table->string('jumlah_pengeluaran');
            $table->string('sisastok')->nullable();
            $table->string('id_satuan');
            $table->string('id_jenisbarang');
            $table->timestamps();

            $table->foreign('id_kodebarang')->references('id')->on('db_ti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dbkel_ti');
    }
}
