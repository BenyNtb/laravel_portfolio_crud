<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-computer",
                "created_at"=>now()
            ],
            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-chart-bar-graph",
                "created_at"=>now()
            ],
            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-earth",
                "created_at"=>now()
            ],
            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-image",
                "created_at"=>now()
            ],
            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-settings",
                "created_at"=>now()
            ],
            [
                "title"=>"Lorem ipsum",
                "description"=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                sint occaecati cupiditate non provident",
                "icon"=>"icofont-tasks-alt",
                "created_at"=>now()
            ],
        ]);
}
}
