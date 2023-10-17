<?php

namespace App\Model\Mesin;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table = 'db_mesin';
    protected $guarded = [];

    // Tambahkan atribut 'namabarang' dalam $fillable
    // protected $fillable = ['namabarang', ];

    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
