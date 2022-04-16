<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Types;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Empty the table first
                Types::truncate();
        
                //Define data
               $types = [
                    ['type'=>'auteur'],
                    ['type'=>'scénographe'],
                    ['type'=>'comédien'],
                    ['type'=>'figurant'],
                    ['type'=>'souffleur'],
                    ['type'=>'régisseur'],
                    ['type'=>'machiniste'],
                    ['type'=>'ouvreuse'],
                ];
                
                //Insert data in the table
                DB::table('types')->insert($types);
        
    }
}

 