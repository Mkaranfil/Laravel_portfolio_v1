<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Home3tSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home3ts')->insert(
            [
                [
                    'titre'=> "Developer/Designer"
                    
                ],
               
        
             
            ]
        );
    }
}
