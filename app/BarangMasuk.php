<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'dbmas_ti';
    protected $guarded = ['jumlah'];

    public function stok()
    {
        return $this->belongsTo(BarangMasuk::class);
    }
}
