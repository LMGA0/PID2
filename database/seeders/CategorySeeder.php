<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Empty the table first
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                Category::truncate();
                DB::statement('SET FOREIGN_KEY_CHECKS=1');
                //Define the data
               $category = [
                    ['category'=>'Inconnue'],
                    ['category'=>'Stand-up'],
                    ['category'=>'Show'],
                    ['category'=>'Exception'],
                    
                ];
                
                //Insert data in the table
                DB::table('category')->insert($category);
        
    }
}
