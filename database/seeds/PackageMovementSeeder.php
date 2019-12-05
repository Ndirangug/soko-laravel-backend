<?php

use App\PackageMovement;
use Illuminate\Database\Seeder;

class PackageMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PackageMovement::class, 100)->create();
    }
}
