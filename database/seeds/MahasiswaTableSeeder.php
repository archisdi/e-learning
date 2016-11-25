<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Archie Isdiningrat',
            'nim' => '1103132074',
            'jenis_kelamin' => 'L',
            'email' => 'archie.isdiningrat@gmail.com',
            'password' => bcrypt('becauseofyou'),
        ]);

        Mahasiswa::create([
            'nama' => 'Bunga Dwipa',
            'nim' => '1103130001',
            'jenis_kelamin' => 'P',
            'email' => 'bungadwipa@gmail.com',
            'password' => bcrypt('bungdwip'),
        ]);

        Mahasiswa::create([
            'nama' => 'Vicha Octavia',
            'nim' => '1103130002',
            'jenis_kelamin' => 'P',
            'email' => 'octaviavicha@yahoo.com',
            'password' => bcrypt('vichaoctavia'),
        ]);

        Mahasiswa::create([
            'nama' => 'Elrizky Mardhi',
            'nim' => '1103130003',
            'jenis_kelamin' => 'L',
            'email' => 'elrizkimardhi@gmail.com',
            'password' => bcrypt('elrizky'),
        ]);

        Mahasiswa::create([
            'nama' => 'Faisal Nuqobasidqy',
            'nim' => '1103130004',
            'jenis_kelamin' => 'L',
            'email' => 'faisalnuqobasidqy12@gmail.com',
            'password' => bcrypt('faisalnuq'),
        ]);

        Mahasiswa::create([
            'nama' => 'Wahyu Kurniawan',
            'nim' => '1103130005',
            'jenis_kelamin' => 'L',
            'email' => 'wahyuawankurniawan@gmail.com',
            'password' => bcrypt('wahyukur'),
        ]);

        Mahasiswa::create([
            'nama' => 'Ghassan Amanullah',
            'nim' => '1103130006',
            'jenis_kelamin' => 'L',
            'email' => 'ga_wijaya@gmail.com',
            'password' => bcrypt('gacanaman'),
        ]);

        Mahasiswa::create([
            'nama' => 'Hafidz Ali',
            'nim' => '1103130007',
            'jenis_kelamin' => 'L',
            'email' => 'hafidzalimaulana@gmail.com',
            'password' => bcrypt('hafidzali'),
        ]);

        Mahasiswa::create([
            'nama' => 'Adfal Riawan',
            'nim' => '1103130008',
            'jenis_kelamin' => 'L',
            'email' => 'adfalriawan@gmail.com',
            'password' => bcrypt('adfalriawan'),
        ]);

        Mahasiswa::create([
            'nama' => 'Fadhlurahman Irwan',
            'nim' => '110313009',
            'jenis_kelamin' => 'L',
            'email' => 'fadhloe@gmail.com',
            'password' => bcrypt('yura0210'),
        ]);

        Mahasiswa::create([
            'nama' => 'Imas Nur Tiarani',
            'nim' => '110313010',
            'jenis_kelamin' => 'P',
            'email' => 'imasnurtiarani@gmail.com',
            'password' => bcrypt('imasnurtiarani'),
        ]);

        Mahasiswa::create([
            'nama' => 'Rini Wahyuni Tahir',
            'nim' => '110313011',
            'jenis_kelamin' => 'P',
            'email' => 'riniwahyunit@gmail.com',
            'password' => bcrypt('riniwahyunit'),
        ]);

        Mahasiswa::create([
            'nama' => 'Fifinella Rahma',
            'nim' => '110313012',
            'jenis_kelamin' => 'P',
            'email' => 'fifinellar9@gmail.com',
            'password' => bcrypt('fifinella'),
        ]);

        Mahasiswa::create([
            'nama' => 'Maya Budi Rahayu',
            'nim' => '110313013',
            'jenis_kelamin' => 'P',
            'email' => 'mayabudir@gmail.com',
            'password' => bcrypt('mayabr'),
        ]);

        Mahasiswa::create([
            'nama' => 'Luthfi Fadil',
            'nim' => '110313014',
            'jenis_kelamin' => 'L',
            'email' => 'luthfifadilalamin@gmail.com',
            'password' => bcrypt('infigare'),
        ]);

        Mahasiswa::create([
            'nama' => 'Ananda Bayu Putra',
            'nim' => '110313015',
            'jenis_kelamin' => 'L',
            'email' => 'anandabayuputra@gmail.com',
            'password' => bcrypt('hackerman'),
        ]);

        Mahasiswa::create([
            'nama' => 'Mochamad Arif Hidayat',
            'nim' => '110313016',
            'jenis_kelamin' => 'L',
            'email' => 'mocharifhidayat01@gmail.com',
            'password' => bcrypt('mocharif'),
        ]);

        Mahasiswa::create([
            'nama' => 'Shalahudin Al Ayubi',
            'nim' => '110313017',
            'jenis_kelamin' => 'L',
            'email' => 'shalahudin.al.ayubi@gmail.com',
            'password' => bcrypt('ayubial'),
        ]);

        Mahasiswa::create([
            'nama' => 'William Roridande',
            'nim' => '110313018',
            'jenis_kelamin' => 'L',
            'email' => 'roridande@gmail.com',
            'password' => bcrypt('roridande'),
        ]);

    }
}
