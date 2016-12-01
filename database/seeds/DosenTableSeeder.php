<?php

use Illuminate\Database\Seeder;
use App\Dosen;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'nama' => 'Anisa Herdiani',
            'kode' => 'NDN',
            'nip' => '15850002',
            'email' => 'anisaherdiani@telkomuniversity.ac.id',
            'password' => bcrypt('15850002')
        ]);

        Dosen::create([
            'nama' => 'Aniq Atiqi',
            'kode' => 'ANR',
            'nip' => '15880028',
            'email' => 'aniqatiqi@telkomuniversity.ac.id',
            'password' => bcrypt('15880028')
        ]);

        Dosen::create([
            'nama' => 'Dody Qori',
            'kode' => 'DQU',
            'nip' => '15880023',
            'email' => 'dqu@telkomuniversity.ac.id',
            'password' => bcrypt('15880023')
        ]);

        Dosen::create([
            'nama' => 'Untari Novia Wisesty',
            'kode' => 'UNW',
            'nip' => '158800662',
            'email' => 'unw@telkomuniversity.ac.id',
            'password' => bcrypt('158800662')
        ]);
    }
}
