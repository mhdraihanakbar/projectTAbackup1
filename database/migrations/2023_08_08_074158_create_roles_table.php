<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('namarole')->nullable();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            ['namarole' => 'Administrator'],
            ['namarole' => 'Petugas Gudang'],
            ['namarole' => 'Simak BMN'],
            ['namarole' => 'Kasubag TU']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
