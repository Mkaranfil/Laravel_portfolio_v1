<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarBtnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbar_btns')->insert(
            [
                [
                    'nom'=> "Download CV",
                   
                ],
               
        
             
            ]
        );
    }
}
