<?php

use Illuminate\Database\Seeder;
use App\Models\AlokasiDosenMatakuliah;

class AlokasiDosenMatakuliahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '1',
            'matakuliah_id' => '1'
        ]);

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '2',
            'matakuliah_id' => '2'
        ]);

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '1',
            'matakuliah_id' => '4'
        ]);

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '1',
            'matakuliah_id' => '3'
        ]);

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '3',
            'matakuliah_id' => '3'
        ]);

        AlokasiDosenMatakuliah::create([
            'dosen_id' => '4',
            'matakuliah_id' => '1'
        ]);

    }
}
