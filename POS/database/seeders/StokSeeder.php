<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $user_id = 1; // Misalkan stok dimasukkan oleh user dengan ID 1

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_id' => $i,
                'user_id' => $user_id,
                'stok_tanggal' => Carbon::now()->subDays(rand(1, 30)), // Tanggal stok acak dalam 30 hari terakhir
                'stok_jumlah' => rand(10, 100), // Stok barang antara 10 hingga 100
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
