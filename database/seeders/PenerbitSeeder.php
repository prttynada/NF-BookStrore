<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penerbit::create([
            'nama' => 'Erlangga'
        ]);
        Penerbit::create([
            'nama' => 'Gramedia Pustaka Utama'
        ]);
        Penerbit::create([
            'nama' => 'Bintang Pustaka'
        ]);
        Penerbit::create([
            'nama' => 'Republika'
        ]);
        Penerbit::create([
            'nama' => 'Mizan Pustaka'
        ]);
    }
}
