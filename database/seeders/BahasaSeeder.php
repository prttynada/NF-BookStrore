<?php

namespace Database\Seeders;

use App\Models\Bahasa;
use Illuminate\Database\Seeder;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bahasa::create([
            'nama' => 'Bahasa Indonesia'
        ]);
        Bahasa::create([
            'nama' => 'English'
        ]);
    }
}
