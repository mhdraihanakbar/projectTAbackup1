<?php

namespace App\Model\Mesin;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'dbmas_mesin';
    protected $guarded = ['jumlah'];


    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
