<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Home1tSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home1ts')->insert(
            [
                [
                    'titre'=> "Hi There,I'm"
                    
                ],
               
        
             
            ]
        );
    }
}
