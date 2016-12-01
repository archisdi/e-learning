<?php

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama' => 'IF-37-04'
        ]);

        Kelas::create([
            'nama' => 'IF-38-04'
        ]);

        Kelas::create([
            'nama' => 'IF-38-06'
        ]);
    }
}
