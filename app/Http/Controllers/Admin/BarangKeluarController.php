<?php

namespace App\Http\Controllers\Admin;

use App\BarangKeluar;
use App\DataBarangJurusan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangKeluarController extends Controller
{
    public function read()
    {
        $stok = DB::table('dbmas_ti')->get();

        $dbkel_ti = DB::table('dbkel_ti')->orderBy('id', 'DESC')->get();
        return view('dashboard.barangkeluarjurusan.index', ['dbkel_ti' => $dbkel_ti, 'stok' => $stok]);
    }

    public function add()
    {
        $kodebarang = DB::table('db_ti')->get();
        $namabarang = DB::table('db_ti')->get();
        return view('dashboard.barangkeluarjurusan.tambah', ['kodebarang' => $kodebarang, 'namabarang' => $namabarang, 'autofill' => NULL]);
    }

    // public function create(Request $request)
    // {
    //     try {

    //         $id_kodebarang = $request->input('id_kodebarang');

    //         $barang = DataBarangJurusan::find($id_kodebarang);

    //         if ($barang) {
    //             return response()->json(['namabarang' => $barang->namabarang]);
    //         } else {
    //             return response()->json(['namabarang' => 'Barang tidak ditemukan']);
    //         }

    //         $this->validate($request, [
    //             // 'namabarang' => 'required',
    //             // 'id_tipe' => 'required',
    //             'id_kodebarang' => 'required|exists:db_ti,id',
    //             // 'tahunperolehan' => 'required',
    //             'jumlah_pengeluaran' => 'required',
    //             // 'id_satuan' => 'required',
    //             // 'id_jenisbarang' => 'required',
    //         ]);

    //         // // $autofill = DataBarangJurusan::findOrFail($request->input('kodebarang'));

    //         BarangKeluar::create($request->all());

    //         $stok = DataBarangJurusan::findOrFail($request->id_kodebarang);
    //         $stok->jumlah -= $request->jumlah_pengeluaran;
    //         $stok->save();

    //         return redirect('/barangkeluar')->with("success", "Data Berhasil Ditambah !");
    //     } catch (\Exception $e) {
    //         // Jika terjadi kesalahan, set pesan flash error dengan pesan kesalahan
    //         return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }


    // public function create(Request $request)
    // {
    //     try {
    //         $this->validate($request, [
    //             'id_kodebarang' => 'required|exists:db_ti,id',
    //             // 'namabarang' => $request,
    //             'jumlah_pengeluaran' => 'required',
    //         ]);

    //         $id_kodebarang = $request->input('id_kodebarang');
    //         $barang = DataBarangJurusan::where('id_kodebarang', $id_kodebarang)->first();

    //         if (!$barang) {
    //             return response()->json(['namabarang' => 'Barang tidak ditemukan']);
    //         }

    //         // Jika validasi berhasil, set nilai autofill
    //         $request->merge(['namabarang' => $barang->namabarang]);

    //         // Selanjutnya, lakukan operasi penyimpanan data
    //         BarangKeluar::create($request->all());

    //         $stok = DataBarangJurusan::findOrFail($request->id_kodebarang);
    //         $stok->jumlah -= $request->jumlah_pengeluaran;
    //         $stok->save();

    //         return redirect('/barangkeluar/ti')->with("success", "Data Berhasil Ditambah !");
    //     } catch (\Exception $e) {
    //         // Jika terjadi kesalahan, set pesan flash error dengan pesan kesalahan
    //         return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }







    // public function create(Request $request)
    // {
    //     try {
    //         $id_kodebarang = $request->input('id_kodebarang');
    //         $barang = DataBarangJurusan::find($id_kodebarang);

    //         if ($barang) {
    //             return response()->json(['namabarang' => $barang->namabarang]);
    //         } else {
    //             return response()->json(['namabarang' => 'Barang tidak ditemukan']);
    //         }


    //         $this->validate($request, [
    //             'id_kodebarang' => 'required|exists:db_ti,id',
    //             'jumlah_pengeluaran' => 'required',
    //         ]);

    //         BarangKeluar::create($request->all());

    //         $stok = DataBarangJurusan::findOrFail($request->id_kodebarang);
    //         $stok->jumlah -= $request->jumlah_pengeluaran;
    //         $stok->save();

    //         return redirect('/barangkeluar')->with("success", "Data Berhasil Ditambah !");
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
    // }

    public function create(Request $request)
    {
        try {

            $id_kodebarang = $request->input('id_kodebarang');
            $barang = DataBarangJurusan::find($id_kodebarang);



            if (!$barang) {
                return response()->json(['namabarang' => 'Barang tidak ditemukan']);
            }

            $this->validate($request, [
                'id_kodebarang' => 'required|exists:db_ti,id',
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
            $stok = DataBarangJurusan::findOrFail($request->id_kodebarang);
            $stok->jumlah -= $request->jumlah_pengeluaran;
            $stok->save();

            // dd('Stok setelah pengurangan:', $stok);

            // Update sisastok di dbkel_ti
            $dbkel_ti = DB::table('dbkel_ti')->where('id_kodebarang', $request->id_kodebarang)->first();
            if ($dbkel_ti) {
                $dbkel_ti->sisastok = $stok_awal - $request->jumlah_pengeluaran;
                DB::table('dbkel_ti')->where('id_kodebarang', $request->id_kodebarang)->update(['sisastok' => $dbkel_ti->sisastok]);
            }


            return redirect('/barangkeluar/ti')->with("success", "Data Pengeluaran Barang Dicatat !");
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
