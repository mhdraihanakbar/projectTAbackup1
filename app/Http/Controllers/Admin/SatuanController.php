<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    public function read()
    {
        $satuan = DB::table('satuan')->orderBy('id', 'DESC')->get();
        return view('dashboard.satuan.index', ['satuan' => $satuan]);
    }

    public function add()
    {
        return view('dashboard.satuan.tambah');
    }

    public function create(Request $request)
    {
        DB::table('satuan')->insert([
            'namasatuan' => $request->namasatuan,
        ]);

        return redirect('/admin/satuan')->with("success", "Data Berhasil Ditambah !");
    }

    public function edit($id)
    {
        $satuan = DB::table('satuan')->where('id', $id)->first();
        return view('dashboard.satuan.edit', ['satuan' => $satuan]);
    }


    public function update(Request $request, $id)
    {
        DB::table('satuan')
            ->where('id', $id)
            ->update([
                'namasatuan' => $request->namasatuan
            ]);

        return redirect('/admin/satuan')->with("success", "Data Berhasil Diupdate !");
    }

    public function delete($id)
    {
        $satuan = DB::table('satuan')->where('id', $id)->first();
        DB::table('satuan')->where('id', $id)->delete();

        return redirect('/admin/satuan')->with("success", "Data Berhasil Didelete !");
    }
}
