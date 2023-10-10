<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BarangKeluar extends Model
{
    protected $table = 'dbkel_ti';
    protected $guarded = [];

    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
