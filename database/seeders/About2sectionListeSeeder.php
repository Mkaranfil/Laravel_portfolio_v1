<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About2sectionListeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about2section_listes')->insert(
            [
                [
                    'icon'=> "bx bx-receipt",
                    'titre'=> "Est labore ad",
                    'paragraphe'=> "Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",

                ],
                [
                    'icon'=> "bx bx-cube-alt",
                    'titre'=> "Harum esse qui",
                    'paragraphe'=> "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",

                ],
                [
                    'icon'=> "bx bx-images",
                    'titre'=> "Aut occaecati",
                    'paragraphe'=> "Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",

                ],
                [
                    'icon'=> "bx bx-shield",
                    'titre'=> "Beatae veritatis",
                    'paragraphe'=> "Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",

                ],
               
            ]
        );
    }
}
