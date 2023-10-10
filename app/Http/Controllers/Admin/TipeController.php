<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipeController extends Controller
{
    public function read()
    {
        $tipe = DB::table('tipe')->orderBy('id', 'DESC')->get();
        return view('dashboard.tipe.index', ['tipe' => $tipe]);
    }

    public function add()
    {
        return view('dashboard.tipe.tambah');
    }

    public function create(Request $request)
    {
        DB::table('tipe')->insert([
            'namatipe' => $request->namatipe,
        ]);

        return redirect('/admin/tipe')->with("success", "Data Berhasil Ditambah !");
    }

    public function edit($id)
    {
        $tipe = DB::table('tipe')->where('id', $id)->first();
        return view('dashboard.tipe.edit', ['tipe' => $tipe]);
    }

    public function update(Request $request, $id)
    {
        DB::table('tipe')
            ->where('id', $id)
            ->update([
                'namatipe' => $request->namatipe
            ]);

        return redirect('/admin/tipe')->with("success", "Data Berhasil Diupdate !");
    }

    public function delete($id)
    {
        $tipe = DB::table('tipe')->where('id', $id)->first();
        DB::table('tipe')->where('id', $id)->delete();

        return redirect('/admin/tipe')->with("success", "Data Berhasil Didelete !");
    }
}
