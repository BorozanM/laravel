<?php

namespace Database\Seeders;

use App\Models\Laptop;
use App\Models\Racun;
use App\Models\StavkaRacuna;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        StavkaRacuna::truncate();
        Racun::truncate();
        Laptop::truncate();

        User::factory(10)->create();

        $ls = new LaptopSeeder();
        $ls->run();

        $rs = new RacunSeeder();
        $rs ->run();


        $srs = new StavkaRacunaSeeder();
        $srs ->run();
    }
}
