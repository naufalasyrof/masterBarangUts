<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
            'kodeSatuan' => 'g',
            'namaSatuan' => 'gram'
            ],
            [
            'kodeSatuan' => 'L',
            'namaSatuan' => 'Liter'
            ],
            [
            'kodeSatuan' => 'BU',
            'namaSatuan' => 'Buah'
            ],
        ]);
    }
}
