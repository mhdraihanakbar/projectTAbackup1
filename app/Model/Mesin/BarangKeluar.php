<?php

namespace App\Model\Mesin;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'dbkel_mesin';
    protected $guarded = [];

    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
