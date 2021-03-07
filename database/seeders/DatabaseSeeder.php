<?php

namespace Database\Seeders;


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
        $this->call(

            [
                NavBarLienSeeder::class,
                NavbarTitreSeeder::class,
                NavbarBtnSeeder::class,
                Home1tSeeder::class,
                Home2tSeeder::class,
                Home3tSeeder::class,

                
            ],
        );
    }
}
