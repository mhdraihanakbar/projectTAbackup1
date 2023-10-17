<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbkelMesinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbkel_mesin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->unsignedBigInteger('id_tipe')->nullable();
            $table->integer('id_kodebarang')->unsigned();
            $table->string('tahunperolehan')->nullable();
            $table->string('jumlah_pengeluaran');
            $table->string('sisastok')->nullable();
            $table->unsignedBigInteger('id_satuan')->nullable();
            $table->unsignedBigInteger('id_jenisbarang')->nullable();
            $table->timestamps();

            $table->foreign('id_kodebarang')->references('id')->on('db_mesin')->onDelete('cascade');
            $table->foreign('id_tipe')->references('id')->on('tipe')->onDelete('cascade');
            $table->foreign('id_satuan')->references('id')->on('satuan')->onDelete('cascade');
            $table->foreign('id_jenisbarang')->references('id')->on('jenisbarang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dbkel_mesin');
    }
}
