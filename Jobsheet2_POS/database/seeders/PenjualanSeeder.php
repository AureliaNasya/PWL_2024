<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'PNJ_202409001',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'PNJ_202409002',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PNJ_202409003',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Rina',
                'penjualan_kode' => 'PNJ_202409004',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'PNJ_202409005',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Dewi',
                'penjualan_kode' => 'PNJ_202409006',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Rudi',
                'penjualan_kode' => 'PNJ_2024009007',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Maria',
                'penjualan_kode' => 'PNJ_202409008',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Taufik',
                'penjualan_kode' => 'PNJ_202409009',
                'penjualan_tanggal' => Carbon::now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Nina',
                'penjualan_kode' => 'PNJ_202409010',
                'penjualan_tanggal' => Carbon::now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
