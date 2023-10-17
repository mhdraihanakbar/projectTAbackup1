<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbMesinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_mesin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->unsignedBigInteger('id_tipe');
            $table->char('kodebarang', 22)->unique();
            $table->string('tahunperolehan');
            $table->string('jumlah');
            $table->unsignedBigInteger('id_satuan');
            $table->unsignedBigInteger('id_jenisbarang');
            $table->timestamps();

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
        Schema::dropIfExists('db_mesin');
    }
}
