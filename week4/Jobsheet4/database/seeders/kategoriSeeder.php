<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kategori_id' => 1, 'kategori_nama' => 'Food & Beverage', 'kategori_kode' => 11],
            ['kategori_id' => 2, 'kategori_nama' => 'Beauty & Health', 'kategori_kode' => 22],
            ['kategori_id' => 3, 'kategori_nama' => 'Home Care', 'kategori_kode' => 33],
            ['kategori_id' => 4, 'kategori_nama' => 'Baby & Kid', 'kategori_kode' => 44],
            ['kategori_id' => 5, 'kategori_nama' => 'Garage', 'kategori_kode' => 55], // Tambahan untuk memenuhi 5 kategori
        ];

        DB::table('m_kategori')->insert($data);
    }
}
