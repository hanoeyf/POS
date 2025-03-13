<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id' => rand(1, 3), 
                'pembeli' => "Pembeli " . $i,
                'penjualan_kode' => "TRX" . str_pad($i, 3, '0', STR_PAD_LEFT), // Kode transaksi TRX001, TRX002, dst.
                'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 
                'updated_at' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
