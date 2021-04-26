<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "title"=>"HTML",
                "value"=>100,
                "created_at"=>now()
            ],
            [
                "title"=>"CSS",
                "value"=>90,
                "created_at"=>now()
            ],
            [
                "title"=>"JAVASCRIPT",
                "value"=>75,
                "created_at"=>now()
            ],
            [
                "title"=>"PHP",
                "value"=>80,
                "created_at"=>now()
            ],
            [
                "title"=>"WORDPRESS",
                "value"=>90,
                "created_at"=>now()
            ],
            [
                "title"=>"PHOTOSHOP",
                "value"=>55,
                "created_at"=>now()
            ],
        ]);
    }
}
