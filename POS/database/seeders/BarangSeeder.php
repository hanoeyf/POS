<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Barang dari Supplier 1
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Beras Premium 5kg', 'harga_beli' => 60000, 'harga_jual' => 75000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Gula Pasir 1kg', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Minyak Goreng 2L', 'harga_beli' => 28000, 'harga_jual' => 35000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG004', 'barang_nama' => 'Tepung Terigu 1kg', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG005', 'barang_nama' => 'Garam 500gr', 'harga_beli' => 3000, 'harga_jual' => 5000],

            // Barang dari Supplier 2
            ['kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Shampoo 200ml', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Pasta Gigi 100gr', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Sikat Gigi', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Deterjen 1kg', 'harga_beli' => 20000, 'harga_jual' => 25000],

            // Barang dari Supplier 3
            ['kategori_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Kopi Bubuk 250gr', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Teh Celup 25pcs', 'harga_beli' => 10000, 'harga_jual' => 13000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Susu Kental Manis', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG014', 'barang_nama' => 'Mie Instan 5pcs', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Saus Sambal 250ml', 'harga_beli' => 8000, 'harga_jual' => 11000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
