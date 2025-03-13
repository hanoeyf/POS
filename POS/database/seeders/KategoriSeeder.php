<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'ELC', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'FRN', 'kategori_nama' => 'Furniture'],
            ['kategori_kode' => 'FAS', 'kategori_nama' => 'Fashion'],
            ['kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan & Minuman'],
            ['kategori_kode' => 'OBT', 'kategori_nama' => 'Obat-obatan'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
