<?php

use Illuminate\Database\Seeder;
use App\Models\AlokasiDosenKelas;

class AlokasiDosenKelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '1',
            'kelas_id' => '1'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '1',
            'kelas_id' => '2'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '2',
            'kelas_id' => '1'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '3',
            'kelas_id' => '2'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '4',
            'kelas_id' => '2'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '5',
            'kelas_id' => '3'
        ]);

        AlokasiDosenKelas::create([
            'alokasi_dosen_matakuliah_id' => '6',
            'kelas_id' => '3'
        ]);

    }
}
