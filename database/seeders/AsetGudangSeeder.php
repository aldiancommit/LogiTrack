<?php

namespace Database\Seeders;

use App\Models\AsetGudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsetGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AsetGudang::create([
            'nama_barang' => 'Laptop ASUS ROG Strix',
            'kode_serial' => 'SN-ROG89123',
            'kondisi'     => 'Bekas',
            'jumlah_stok' => 15,
        ]);

        AsetGudang::create([
            'nama_barang' => 'Laptop LENOVO LOQ Irx',
            'kode_serial' => 'SN-ROG642213',
            'kondisi'     => 'Bagus',
            'jumlah_stok' => 11,
        ]);
    }
}
