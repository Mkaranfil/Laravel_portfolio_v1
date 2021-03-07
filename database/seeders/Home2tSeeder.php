<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Home2tSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home2ts')->insert(
            [
                [
                    'titre'=> "Mustafa Karanfil"
                    
                ],
               
        
             
            ]
        );
    }
}
