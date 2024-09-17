<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'S01_B01',
                'barang_nama' => 'Mie Goreng Instan',
                'harga_beli' => 2500,
                'harga_jual' => 300,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'S02_B02',
                'barang_nama' => 'Minuman Teh Kemasan',
                'harga_beli' => 3500,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'S03_B03',
                'barang_nama' => 'Biskuit Gandum',
                'harga_beli' => 7000,
                'harga_jual' => 9000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'S01_B04',
                'barang_nama' => 'Sabun Mandi Cair',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 2,
                'barang_kode' => 'S02_B05',
                'barang_nama' => 'Shampo Anti Ketombe',
                'harga_beli' => 12000,
                'harga_jual' => 15500,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'S03_B06',
                'barang_nama' => 'Hand Sanitizer',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'S01_B07',
                'barang_nama' => 'Deterjen Cair',
                'harga_beli' => 15000,
                'harga_jual' => 18000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'S02_B08',
                'barang_nama' => 'Pembersih Kaca',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'S03_B09',
                'barang_nama' => 'Pengharum Ruangan',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'S01_B10',
                'barang_nama' => 'Popok Bayi',
                'harga_beli' => 50000,
                'harga_jual' => 65000,
            ],
            [
                'barang_id' => 11,
                'kategori_id' => 4,
                'barang_kode' => 'S02_B11',
                'barang_nama' => 'Mainan Bayi Gigi',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 4,
                'barang_kode' => 'S03_B12',
                'barang_nama' => 'Susu Formula Bayi',
                'harga_beli' => 70000,
                'harga_jual' => 85000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 5,
                'barang_kode' => 'S01_B13',
                'barang_nama' => 'Alat Pancing Lengkap',
                'harga_beli' => 200000,
                'harga_jual' => 250000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 5,
                'barang_kode' => 'S02_B14',
                'barang_nama' => 'Bola Sepak Adidas',
                'harga_beli' => 100000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 5,
                'barang_kode' => 'S03_B15',
                'barang_nama' => 'Set Lego',
                'harga_beli' => 150000,
                'harga_jual' => 180000,
            ],
        ];
        DB::table('m_barang')->insert($data);

        /* update data */
        DB::table('m_barang')->where('barang_id', 1)->update([
            'harga_jual' => 3000,
        ]);
    }
}
