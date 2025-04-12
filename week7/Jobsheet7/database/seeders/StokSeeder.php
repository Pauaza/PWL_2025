<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 2, 'stok_tanggal' => '2025-02-01', 'stok_jumlah' => 9],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2025-02-02', 'stok_jumlah' => 13],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 2, 'stok_tanggal' => '2025-02-03', 'stok_jumlah' => 17],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 2, 'stok_tanggal' => '2025-02-04', 'stok_jumlah' => 15],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 2, 'stok_tanggal' => '2025-02-05', 'stok_jumlah' => 25],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 2, 'stok_tanggal' => '2025-02-06', 'stok_jumlah' => 21],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 2, 'stok_tanggal' => '2025-02-07', 'stok_jumlah' => 15],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 2, 'stok_tanggal' => '2025-02-08', 'stok_jumlah' => 12],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 2, 'stok_tanggal' => '2025-02-09', 'stok_jumlah' => 8],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id' => 2, 'stok_tanggal' => '2025-02-10', 'stok_jumlah' => 9],
        ];

        DB::table('t_stok')->insert($data);
    }
}
