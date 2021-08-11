<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Typ::factory(4)->create();
    }
}
