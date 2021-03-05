<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbar_titres')->insert(
            [
                [
                    'titre'=> "MK",
                    'href'=> "#hero",
                ],
               
        
             
            ]
        );
    }
}
