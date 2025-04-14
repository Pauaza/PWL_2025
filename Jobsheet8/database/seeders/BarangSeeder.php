<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_nama' => 'Air Mineral', 'harga_beli' => 5000, 'harga_jual' => 5500, 'barang_kode' => 'A'],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_nama' => 'Snack', 'harga_beli' => 10000, 'harga_jual' => 11000, 'barang_kode' => 'B'],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_nama' => 'Shampoo', 'harga_beli' => 20000, 'harga_jual' => 22000, 'barang_kode' => 'C'],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 15000, 'harga_jual' => 16500, 'barang_kode' => 'D'],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_nama' => 'Pembersih Lantai', 'harga_beli' => 25000, 'harga_jual' => 27500, 'barang_kode' => 'E'],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_nama' => 'Tisu Gulung', 'harga_beli' => 12000, 'harga_jual' => 13000, 'barang_kode' => 'F'],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_nama' => 'Susu Formula', 'harga_beli' => 50000, 'harga_jual' => 55000, 'barang_kode' => 'G'],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_nama' => 'Popok Bayi', 'harga_beli' => 70000, 'harga_jual' => 77000, 'barang_kode' => 'H'],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_nama' => 'Baterai AA', 'harga_beli' => 30000, 'harga_jual' => 33000, 'barang_kode' => 'I'],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_nama' => 'Lampu LED', 'harga_beli' => 45000, 'harga_jual' => 49000, 'barang_kode' => 'J'],
        ];

        DB::table('m_barang')->insert($data);
    }
}
