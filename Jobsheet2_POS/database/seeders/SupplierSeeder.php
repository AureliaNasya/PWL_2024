<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT. Bumi Sejahtera',
                'supplier_alamat' => 'Jl. Ijen No. 25, Klojen',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV. Makmur Abadi',
                'supplier_alamat' => 'Jl. Soekarno-Hatta No.12, Lowokwaru',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD. Sumber Rejeki',
                'supplier_alamat' => 'Jl. Raya Dieng No. 88, Sukun',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}