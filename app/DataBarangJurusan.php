<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarangJurusan extends Model
{
    protected $table = 'db_ti';
    protected $guarded = [];

    // Tambahkan atribut 'namabarang' dalam $fillable
    protected $fillable = ['namabarang'];

    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
