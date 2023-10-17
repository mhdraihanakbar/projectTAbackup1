<?php

namespace App\Http\Controllers\PetugasGudangMesin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Mesin\BarangMasuk;
use App\Model\Mesin\DataBarang;


class BarangMasukController extends Controller
{
    public function read()
    {
        $barangmasuk = DB::table('dbmas_mesin')->orderBy('id', 'DESC')->get();
        return view('dashboard.mesin.barangmasuk.index', ['barangmasuk' => $barangmasuk]);
    }

    public function terima($id)
    {
        try {
            $barangMasuk = BarangMasuk::find($id);

            if ($barangMasuk) {
                // Buat data baru dalam tabel 'data barang masuk jurusan'
                DataBarang::create([
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
                // dd($barangMasuk);

                // // Hapus data dari tabel 'barang masuk'
                // $barangMasuk->delete();

                return redirect()->back()->with('success', 'Barang Masuk Ke Gudang');
            }
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, set pesan flash error dengan pesan kesalahan
            // return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Sudah di Inputkan.');
            // dd($e->getMessage());
        }
    }

    public function databarangmesin()
    {
        $databarangmesin = DB::table('db_mesin')->orderBy('id', 'DESC')->get();
        return view('dashboard.mesin.databarang.index', ['databarangmesin' => $databarangmesin]);
    }
}
