<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(DosenTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(MatakuliahTableSeeder::class);
        $this->call(AlokasiDosenMatakuliahTableSeeder::class);
        $this->call(AlokasiDosenKelasTableSeeder::class);
        $this->call(AlokasiKuisTableSeeder::class);
    }

}
