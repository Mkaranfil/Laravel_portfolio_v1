<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavBarLienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nav_bar_liens')->insert(
            [
                [
                    'nom' => "Home",
                    'href' => "#hero"
                ],
                [
                    'nom' => "About",
                    'href' => "#about"
                ],
                [
                    'nom' => "Services",
                    'href' => "#services"
                ],
                [
                    'nom' => "Portfolio",
                    'href' => "#portfolio",
                ],
                [
                    'nom' => "Contact",
                    'href' => "#contact"
                ],
             
            ]
        );
    }
}
