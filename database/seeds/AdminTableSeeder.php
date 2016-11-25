<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama' => 'Edwina Anky',
            'username' => 'edwinanki',
            'password' => bcrypt('ara')
        ]);
    }
}
