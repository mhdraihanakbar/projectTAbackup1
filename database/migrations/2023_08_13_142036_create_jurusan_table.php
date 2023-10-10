<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id();
            $table->string('namajurusan')->nullable();
            $table->timestamps();
        });

        DB::table('jurusan')->insert([
            ['namajurusan' => 'Teknologi Informasi'],
            ['namajurusan' => 'Teknik Mesin'],
            ['namajurusan' => 'Teknik Elektro'],
            ['namajurusan' => 'Teknik Sipil'],
            ['namajurusan' => 'Administrasi Niaga'],
            ['namajurusan' => 'Akuntansi'],
            ['namajurusan' => 'Bahasa Inggris'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
}
