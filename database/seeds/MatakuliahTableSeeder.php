<?php

use Illuminate\Database\Seeder;
use App\Models\Matakuliah;

class MatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matakuliah::create([
            'nama' => 'RPL-OOT',
            'kode' => 'SGK0124',
            'sks' => '3'
        ]);

        Matakuliah::create([
            'nama' => 'JARINGAN KOMPUTER',
            'kode' => 'SGK0141',
            'sks' => '3'
        ]);

        Matakuliah::create([
            'nama' => 'TEORI KOMPUTASI',
            'kode' => 'SGK0122',
            'sks' => '3'
        ]);

        Matakuliah::create([
            'nama' => 'KECERDASAN BUATAN',
            'kode' => 'SGK0126',
            'sks' => '4'
        ]);
    }
}
