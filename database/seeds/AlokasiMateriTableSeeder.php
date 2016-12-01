<?php

use Illuminate\Database\Seeder;
use App\Models\AlokasiMateri;

class AlokasiMateriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlokasiMateri::create([
            'nama' => 'usecase',
            'ext' => 'pdf',
            'alokasi_dosen_matakuliah_id' => '1'
        ]);

        AlokasiMateri::create([
            'nama' => 'class',
            'ext' => 'pdf',
            'alokasi_dosen_matakuliah_id' => '1'
        ]);
    }
}
