<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['namarole' => 'Administrator']);
        Role::create(['namarole' => 'Simak BMN']);
        Role::create(['namarole' => 'Kasubag TU']);
        Role::create(['namarole' => 'Petugas Gudang Mesin']);
        Role::create(['namarole' => 'Petugas Gudang Sipil']);
        Role::create(['namarole' => 'Petugas Gudang Elektro']);
        Role::create(['namarole' => 'Petugas Gudang Adm Niaga']);
        Role::create(['namarole' => 'Petugas Gudang Akuntansi']);
        Role::create(['namarole' => 'Petugas Gudang Ti']);
        Role::create(['namarole' => 'Petugas Gudang Bing']);
    }
}
