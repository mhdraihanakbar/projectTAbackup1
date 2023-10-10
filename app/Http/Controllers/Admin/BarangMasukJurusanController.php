<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BarangMasuk;
use App\DataBarangJurusan;

class BarangMasukJurusanController extends Controller
{
    public function read()
    {
        $barangmasukjurusan = DB::table('dbmas_ti')->orderBy('id', 'DESC')->get();
        return view('dashboard.barangmasukjurusan.index', ['barangmasukjurusan' => $barangmasukjurusan]);
    }

    public function terima($id)
    {
        try {
            $barangMasuk = BarangMasuk::find($id);

            if ($barangMasuk) {
                // Buat data baru dalam tabel 'data barang masuk jurusan'
                DataBarangJurusan::create([
                    // 'id' => $barangMasuk->id,
                    'namabarang' => $barangMasuk->namabarang,
                    'id_tipe' => $barangMasuk->id_tipe,
                    'kodebarang' => $barangMasuk->kodebarang,
                    'tahunperolehan' => $barangMasuk->tahunperolehan,
                    'jumlah' => $barangMasuk->jumlah,
                    'id_satuan' => $barangMasuk->id_satuan,
                    'id_jenisbarang' => $barangMasuk->id_jenisbarang,
                    // Tambahkan kolom-kolom lain yang perlu diisi
                ]);

                // // Hapus data dari tabel 'barang masuk'
                // $barangMasuk->delete();

                return redirect()->back()->with('success', 'Barang Masuk Ke Gudang');
            }
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, set pesan flash error dengan pesan kesalahan
            // return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Sudah di Inputkan.');
        }
    }

    public function databarangti()
    {
        $databarangti = DB::table('db_ti')->orderBy('id', 'DESC')->get();
        return view('dashboard.databarangti.index', ['databarangti' => $databarangti]);
    }
}
