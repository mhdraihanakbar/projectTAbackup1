<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BarangMasukController extends Controller
{
    public function read()
    {
        $barangmasuk = DB::table('barangmasuk')->orderBy('id', 'DESC')->get();
        return view('dashboard.barangmasuk.index', ['barangmasuk' => $barangmasuk]);
    }

    public function add()
    {

        // Mengambil nomor urutan terakhir dari basis data
        $lastItem = DB::table('barangmasuk')->orderBy('id', 'desc')->first();

        // Menghitung nomor urutan berikutnya
        $nextNumber = ($lastItem) ? $lastItem->id + 1 : 1;

        $generatedCode = 'BRG-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        $tipe = DB::table('tipe')->get();
        $satuan = DB::table('satuan')->get();
        $jur = DB::table('jurusan')->get();
        $jb = DB::table('jenisbarang')->get();

        return view('dashboard.barangmasuk.tambah', [
            'jb' => $jb,
            'tipe' => $tipe,
            'satuan' => $satuan,
            'jur' => $jur,
            'generatedCode' => $generatedCode
        ]);
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'namabarang' => 'required',
                'id_tipe' => 'required',
                'kodebarang' => 'required',
                'tahunperolehan' => 'required',
                'jumlah' => 'required',
                'id_satuan' => 'required',
                'id_jurusan' => 'required',
                'id_jenisbarang' => 'required',
            ]);

            // Mengambil nomor urutan terakhir dari basis data
            $lastItem = DB::table('barangmasuk')->orderBy('id', 'desc')->first();

            // Menghitung nomor urutan berikutnya
            $nextNumber = ($lastItem) ? $lastItem->id + 1 : 1;

            // Membentuk kode barang berdasarkan nomor urutan
            $kodebarang = 'BRG-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

            if ($validatedData['id_jurusan'] == 1) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_ti')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 2) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_mesin')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 3) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_elektro')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 4) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_sipil')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 5) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_an')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 6) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_akun')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            } else if ($validatedData['id_jurusan'] == 7) {
                DB::table('barangmasuk')->insert(
                    [
                        'namabarang' => $request->namabarang,
                        'id_tipe' => $request->id_tipe,
                        'kodebarang' => $kodebarang,
                        'tahunperolehan' => $request->tahunperolehan,
                        'jumlah' => $request->jumlah,
                        'id_satuan' => $request->id_satuan,
                        'id_jurusan' => $request->id_jurusan,
                        'id_jenisbarang' => $request->id_jenisbarang
                    ]
                );
                DB::table('dbmas_bing')->insert([
                    'namabarang' => $request->namabarang,
                    'id_tipe' => $request->id_tipe,
                    'kodebarang' => $kodebarang,
                    'tahunperolehan' => $request->tahunperolehan,
                    'jumlah' => $request->jumlah,
                    'id_satuan' => $request->id_satuan,
                    'id_jenisbarang' => $request->id_jenisbarang,
                    'status' => 'diterima',
                ]);
            }
            return redirect('/barangmasuk')->with("success", "Data Berhasil Ditambah !");
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, set pesan flash error dengan pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
