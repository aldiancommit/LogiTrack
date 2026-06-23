<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsetGudang extends Model
{
    protected $table = 'aset_gudang';

    protected $fillable = [
        'nama_barang',
        'kode_serial',
        'kondisi',
        'jumlah_stok',
    ];
}
