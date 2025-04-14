<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' =>11, 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Siti', 'penjualan_kode' =>12, 'penjualan_tanggal' => '2024-03-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' =>13, 'penjualan_tanggal' => '2024-03-03'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Rina', 'penjualan_kode' =>14, 'penjualan_tanggal' => '2024-03-04'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Joko', 'penjualan_kode' =>15, 'penjualan_tanggal' => '2024-03-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Dewi', 'penjualan_kode' =>16, 'penjualan_tanggal' => '2024-03-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Tono', 'penjualan_kode' =>17, 'penjualan_tanggal' => '2024-03-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Lina', 'penjualan_kode' =>18, 'penjualan_tanggal' => '2024-03-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Rudi', 'penjualan_kode' =>19, 'penjualan_tanggal' => '2024-03-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Sari', 'penjualan_kode' =>20, 'penjualan_tanggal' => '2024-03-10'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
