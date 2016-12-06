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
            'title' => 'Kuis 1',
            'desc' => 'blablablablablablablablablablablabla',
            'due' => '2016-12-02 23:00'
        ]);

        AlokasiKuis::create([
            'ext' => 'pdf',
            'alokasi_dosen_kelas_id' => '1',
            'title' => 'Kuis 2',
            'desc' => 'blablablablablablablablablablablabla',
            'due' => '2016-12-21 23:00'
        ]);

        AlokasiKuis::create([
            'ext' => 'pdf',
            'alokasi_dosen_kelas_id' => '5',
            'title' => 'Kuis 1',
            'desc' => 'blablablablablablablablablablablabla',
            'due' => '2016-12-12 23:00'
        ]);
    }
}
