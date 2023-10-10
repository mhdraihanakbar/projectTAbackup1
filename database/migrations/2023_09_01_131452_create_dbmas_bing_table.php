<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbmasBingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbmas_bing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabarang');
            $table->string('id_tipe');
            $table->char('kodebarang', 22)->unique();
            $table->string('tahunperolehan');
            $table->string('jumlah');
            $table->string('id_satuan');
            $table->string('id_jenisbarang');
            $table->string('status');
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
        Schema::dropIfExists('dbmas_bing');
    }
}
