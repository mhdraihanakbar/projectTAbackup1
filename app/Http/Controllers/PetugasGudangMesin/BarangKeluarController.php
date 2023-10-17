<?php

namespace App\Http\Controllers\PetugasGudangMesin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Mesin\DataBarang;
use App\Model\Mesin\BarangKeluar;

class BarangKeluarController extends Controller
{
    public function read()
    {
        $stok = DB::table('dbmas_mesin')->get();

        $dbkel_mesin = DB::table('dbkel_mesin')->orderBy('id', 'DESC')->get();
        return view('dashboard.mesin.barangkeluar.index', ['dbkel_mesin' => $dbkel_mesin, 'stok' => $stok]);
    }

    public function add()
    {
        $kodebarang = DB::table('db_mesin')->get();
        $namabarang = DB::table('db_mesin')->get();
        return view('dashboard.mesin.barangkeluar.tambah', ['kodebarang' => $kodebarang, 'namabarang' => $namabarang, 'autofill' => NULL]);
    }

    public function create(Request $request)
    {
        try {
            $id_kodebarang = $request->input('id_kodebarang');
            $barang = DataBarang::find($id_kodebarang);



            $this->validate($request, [
                'id_kodebarang' => 'required|exists:db_mesin,id',
                'jumlah_pengeluaran' => 'required',
            ]);

            // Set nilai autofill
            $request->merge(['namabarang' => $barang->namabarang]);

            // Ambil stok awal dari db_ti
            $stok_awal = $barang->jumlah;

            // dd($request->all(), $barang);

            // Buat data BarangKeluar
            BarangKeluar::create($request->all());

            // Kurangi stok
            $stok = DataBarang::findOrFail($request->id_kodebarang);
            $stok->jumlah -= $request->jumlah_pengeluaran;
            $stok->save();

            // dd('Stok setelah pengurangan:', $stok);

            // Update sisastok di
            $dbkel_mesin = DB::table('dbkel_mesin')->where('id_kodebarang', $request->id_kodebarang)->first();
            if ($dbkel_mesin) {
                $dbkel_mesin->sisastok = $stok_awal - $request->jumlah_pengeluaran;
                DB::table('dbkel_mesin')->where('id_kodebarang', $request->id_kodebarang)->update(['sisastok' => $dbkel_mesin->sisastok]);
            }


            return redirect('/barangkeluar/mesin')->with("success", "Data Pengeluaran Barang Dicatat !");
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
