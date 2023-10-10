<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function read()
    {
        $supplier = DB::table('supplier')->orderBy('id', 'DESC')->get();
        return view('dashboard.supplier.index', ['supplier' => $supplier]);
    }

    public function add()
    {
        return view('dashboard.supplier.tambah');
    }

    public function create(Request $request)
    {
        DB::table('supplier')->insert([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
        ]);

        return redirect('/admin/supplier')->with("success", "Data Berhasil Ditambah !");
    }

    public function edit($id)
    {
        $supplier = DB::table('supplier')->where('id', $id)->first();
        return view('dashboard.supplier.edit', ['supplier' => $supplier]);
    }


    public function update(Request $request, $id)
    {
        DB::table('supplier')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'notelp' => $request->notelp,
                'alamat' => $request->alamat,
            ]);

        return redirect('/admin/supplier')->with("success", "Data Berhasil Diupdate !");
    }

    public function delete($id)
    {
        $satuan = DB::table('supplier')->where('id', $id)->first();
        DB::table('supplier')->where('id', $id)->delete();

        return redirect('/admin/supplier')->with("success", "Data Berhasil Didelete !");
    }
}
