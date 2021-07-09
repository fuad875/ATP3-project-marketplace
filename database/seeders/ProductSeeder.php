<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_products')->insert([
            [
                'name'=>'School management system',
                "price"=>"$300",
                "description"=>"
                Time:1month
                you have to know javascript,php,html,css",
                "category"=>"Development",
                "gallery"=>"public/img/s4.png"
                
                
            ],
            [
                'name'=>'Data Entry',
                "price"=>"$400",
                "description"=>"company employer data entry",
                "category"=>"Data mining",
                "gallery"=>" "
            ]
          
        ]);
    }
}
