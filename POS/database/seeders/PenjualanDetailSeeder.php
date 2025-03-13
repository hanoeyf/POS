<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualanIds = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray(); 

        $data = [];

        foreach ($penjualanIds as $penjualanId) {
           
            $barangTerpilih = array_rand($barangIds, 3);
            foreach ($barangTerpilih as $index) {
                $barangId = $barangIds[$index];
                $hargaBarang = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');

                $data[] = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $hargaBarang,
                    'jumlah' => rand(1, 5), // Setiap barang dibeli 1-5 pcs
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
