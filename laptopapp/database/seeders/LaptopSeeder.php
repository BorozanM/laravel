<?php

namespace Database\Seeders;

use App\Models\Laptop;
use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laptop::factory(10)->create();
    }
}
