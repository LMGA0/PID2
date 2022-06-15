<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Agencies;

class AgencySeeder extends Seeder
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
        Agencies::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
       $agencies = [
            ['ag_name'=>'Acting Association'],
            ['ag_name'=>'New Agency'],
        ];
        
        //Insert data in the table
        DB::table('agencies')->insert($agencies);
    }
}
