<?php

namespace Database\Seeders;

use App\Models\Penulis;
use Illuminate\Database\Seeder;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penulis::factory(20)->create();
    }
}
