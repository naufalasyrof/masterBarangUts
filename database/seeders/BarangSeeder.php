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
        DB::table('barangs')->insert([
            [
                'kodeBarang' => 'BM01',
                'namaBarang' => 'Beras Merah',
                'harga' => 25000,
                'deskripsi' => 'Beras putih berkualitas',
                'satuan_id' => 1
            ],
            [
                'kodeBarang' => 'AM01',
                'namaBarang' => 'Air Mineral',
                'harga' => 7000,
                'deskripsi' => 'Air untuk minum',
                'satuan_id' => 2
                ],
            [
                'kodeBarang' => 'RS01',
                'namaBarang' => 'Roti Sisir',
                'harga' => 3000,
                'deskripsi' => 'Roti sisir rasa nanas',
                'satuan_id' => 3
            ],
        ]);
    }
}
