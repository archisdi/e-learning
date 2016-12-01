<?php

use App\Models\AlokasiKuis;
use Illuminate\Database\Seeder;

class AlokasiKuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlokasiKuis::create([
            'ext' => 'pdf',
            'alokasi_dosen_kelas_id' => '1',
            'desc' => 'Kuis 1'
        ]);

        AlokasiKuis::create([
            'ext' => 'pdf',
            'alokasi_dosen_kelas_id' => '1',
            'desc' => 'Kuis 2'
        ]);

        AlokasiKuis::create([
            'ext' => 'pdf',
            'alokasi_dosen_kelas_id' => '5',
            'desc' => 'Kuis 1'
        ]);
    }
}
