<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    public function read()
    {
        $jurusan = DB::table('jurusan')->orderBy('id', 'DESC')->get();
        return view('dashboard.jurusan.index', ['jurusan' => $jurusan]);
    }
    public function add()
    {
        return view('dashboard.jurusan.tambah');
    }

    public function create(Request $request)
    {
        DB::table('jurusan')->insert([
            'namajurusan' => $request->namajurusan,
        ]);

        return redirect('/jurusan')->with("success", "Data Berhasil Ditambah !");
    }

    public function edit($id)
    {
        $jurusan = DB::table('jurusan')->where('id', $id)->first();
        return view('dashboard.jurusan.edit', ['jurusan' => $jurusan]);
    }


    public function update(Request $request, $id)
    {
        DB::table('jurusan')
            ->where('id', $id)
            ->update([
                'namajurusan' => $request->namajurusan
            ]);

        return redirect('/admin/jurusan')->with("success", "Data Berhasil Diupdate !");
    }

    public function delete($id)
    {
        $jurusan = DB::table('jurusan')->where('id', $id)->first();
        DB::table('jurusan')->where('id', $id)->delete();

        return redirect('/jurusan')->with("success", "Data Berhasil Didelete !");
    }
}
