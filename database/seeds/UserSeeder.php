<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $administratorRole = Role::where('namarole', 'Administrator')->first();
        // $simakbmnRole = Role::where('namarole', 'Simak BMN')->first();
        // $kasubagtuRole = Role::where('namarole', 'Kasubag TU')->first();
        // $petugasgudangmesinRole = Role::where('namarole', 'Petugas Gudang Mesin')->first();
        // $petugasgudangsipilRole = Role::where('namarole', 'Petugas Gudang Sipil')->first();
        // $petugasgudangelektroRole = Role::where('namarole', 'Petugas Gudang Elektro')->first();
        // $petugasgudangadmniagaRole = Role::where('namarole', 'Petugas Gudang Adm Niaga')->first();
        // $petugasgudangakuntansiRole = Role::where('namarole', 'Petugas Gudang Akuntasi')->first();
        // $petugasgudangtiRole = Role::where('namarole', 'Petugas Gudang Ti')->first();
        // $petugasgudangbingRole = Role::where('namarole', 'Petugas Gudang Bing')->first();

        $administratorRole = Role::where('namarole', 'Administrator')->first();
        $simakbmnRole = Role::where('namarole', 'Simak BMN')->first();
        $kasubagtuRole = Role::where('namarole', 'Kasubag TU')->first();
        $petugasgudangmesinRole = Role::where('namarole', 'Petugas Gudang Mesin')->first();
        $petugasgudangsipilRole = Role::where('namarole', 'Petugas Gudang Sipil')->first();
        $petugasgudangelektroRole = Role::where('namarole', 'Petugas Gudang Elektro')->first();
        $petugasgudangadmniagaRole = Role::where('namarole', 'Petugas Gudang Adm Niaga')->first();
        $petugasgudangakuntansiRole = Role::where('namarole', 'Petugas Gudang Akuntansi')->first();
        $petugasgudangtiRole = Role::where('namarole', 'Petugas Gudang TI')->first();
        $petugasgudangbingRole = Role::where('namarole', 'Petugas Gudang Bing')->first();




        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'administrator@pnp.com';
        $admin->password = bcrypt('Admin2023');
        $admin->id_role = $administratorRole->id;
        $admin->save();

        $simakbmn = new User();
        $simakbmn->name = 'Simak BMN';
        $simakbmn->email = 'simakbmn@pnp.com';
        $simakbmn->password = bcrypt('Simakbmn2023');
        $simakbmn->id_role = $simakbmnRole->id;
        $simakbmn->save();

        $kasubagtu = new User();
        $kasubagtu->name = 'Kasubag TU';
        $kasubagtu->email = 'kasubagtu@pnp.com';
        $kasubagtu->password = bcrypt('Kasubagtu2023');
        $kasubagtu->id_role = $kasubagtuRole->id;
        $kasubagtu->save();

        $petugasgudangmesin = new User();
        $petugasgudangmesin->name = 'Petugas Gudang Mesin';
        $petugasgudangmesin->email = 'petugasgudangmesin@pnp.com';
        $petugasgudangmesin->password = bcrypt('Pgmesin2023');
        $petugasgudangmesin->id_role = $petugasgudangmesinRole->id;
        $petugasgudangmesin->save();

        $petugasgudangsipil = new User();
        $petugasgudangsipil->name = 'Petugas Gudang Sipil';
        $petugasgudangsipil->email = 'petugasgudangsipil@pnp.com';
        $petugasgudangsipil->password = bcrypt('Pgsipil2023');
        $petugasgudangsipil->id_role = $petugasgudangsipilRole->id;
        $petugasgudangsipil->save();

        $petugasgudangelektro = new User();
        $petugasgudangelektro->name = 'Petugas Gudang Elektro';
        $petugasgudangelektro->email = 'petugasgudangelektro@pnp.com';
        $petugasgudangelektro->password = bcrypt('Pgelektro2023');
        $petugasgudangelektro->id_role = $petugasgudangelektroRole->id;
        $petugasgudangelektro->save();

        $petugasgudangadmniaga = new User();
        $petugasgudangadmniaga->name = 'Petugas Gudang Adm Niaga';
        $petugasgudangadmniaga->email = 'petugasgudangadmniaga@pnp.com';
        $petugasgudangadmniaga->password = bcrypt('Pgadmniaga2023');
        $petugasgudangadmniaga->id_role = $petugasgudangadmniagaRole->id;
        $petugasgudangadmniaga->save();

        $petugasgudangakuntansi = new User();
        $petugasgudangakuntansi->name = 'Petugas Gudang Akuntansi';
        $petugasgudangakuntansi->email = 'petugasgudangakuntansi@pnp.com';
        $petugasgudangakuntansi->password = bcrypt('Pgakuntansi2023');
        $petugasgudangakuntansi->id_role = $petugasgudangakuntansiRole->id;
        $petugasgudangakuntansi->save();

        $petugasgudangti = new User();
        $petugasgudangti->name = 'Petugas Gudang TI';
        $petugasgudangti->email = 'petugasgudangti@pnp.com';
        $petugasgudangti->password = bcrypt('Pgti2023');
        $petugasgudangti->id_role = $petugasgudangtiRole->id;
        $petugasgudangti->save();

        $petugasgudangbing = new User();
        $petugasgudangbing->name = 'Petugas Gudang Bahasa Inggris';
        $petugasgudangbing->email = 'petugasgudangbing@pnp.com';
        $petugasgudangbing->password = bcrypt('Pgbing2023');
        $petugasgudangbing->id_role = $petugasgudangbingRole->id;
        $petugasgudangbing->save();
    }
}
