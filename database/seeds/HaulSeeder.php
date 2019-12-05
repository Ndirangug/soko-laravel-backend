<?php

use App\Haul;
use Illuminate\Database\Seeder;

class HaulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Haul::class, 100)->create();
    }
}
