<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                "title"=>"App 1",
                "link"=>"portfolio-1.jpg",
                "filter"=>"app",
                "created_at"=>now(),
            ],
            [
                "title"=>"Web 1",
                "link"=>"portfolio-2.jpg",
                "filter"=>"web",
                "created_at"=>now(),
            ],
            [
                "title"=>"App 2",
                "link"=>"portfolio-3.jpg",
                "filter"=>"app",
                "created_at"=>now(),
            ],
            [
                "title"=>"Card 2",
                "link"=>"portfolio-4.jpg",
                "filter"=>"card",
                "created_at"=>now(),
            ],
            [
                "title"=>"Web 2",
                "link"=>"portfolio-5.jpg",
                "filter"=>"web",
                "created_at"=>now(),
            ],
            [
                "title"=>"App 3",
                "link"=>"portfolio-6.jpg",
                "filter"=>"app",
                "created_at"=>now(),
            ],
            [
                "title"=>"Card 1",
                "link"=>"portfolio-7.jpg",
                "filter"=>"card",
                "created_at"=>now(),
            ],
            [
                "title"=>"Card 4",
                "link"=>"portfolio-8.jpg",
                "filter"=>"card",
                "created_at"=>now(),
            ],
            [
                "title"=>"Web 3",
                "link"=>"portfolio-9.jpg",
                "filter"=>"web",
                "created_at"=>now(),
            ],

        ]);
    }
}
