<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'kategori_id' => 1,
                'kategori_kode' => 'FNB',
                'kategori_nama' => 'Food and Beverages',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'BHC',
                'kategori_nama' => 'Beauty and Health Care',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'HMC',
                'kategori_nama' => 'Home Care',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'BBK',
                'kategori_nama' => 'Baby and Kids',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'HBY',
                'kategori_nama' => 'Hobby',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
