<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;


class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Empty the table first
                Artist::truncate();
        
                //Define data
               $artists = [
                    ['firstname'=>'Daniel','lastname'=>'Marcelin','agencies_id'=>NULL],
                    ['firstname'=>'Philippe','lastname'=>'Laurent','agencies_id'=>NULL],
                    ['firstname'=>'Marius','lastname'=>'Von Mayenburg','agencies_id'=>NULL],
                    ['firstname'=>'Olivier','lastname'=>'Boudon','agencies_id'=>NULL],
                    ['firstname'=>'Anne Marie','lastname'=>'Loop','agencies_id'=>NULL],
                    ['firstname'=>'Pietro','lastname'=>'Varasso','agencies_id'=>NULL],
                    ['firstname'=>'Laurent','lastname'=>'Caron','agencies_id'=>NULL],
                    ['firstname'=>'Élena','lastname'=>'Perez','agencies_id'=>NULL],
                    ['firstname'=>'Guillaume','lastname'=>'Alexandre','agencies_id'=>NULL],
                    ['firstname'=>'Claude','lastname'=>'Semal','agencies_id'=>NULL],
                    ['firstname'=>'Laurence','lastname'=>'Warin','agencies_id'=>NULL],
                    ['firstname'=>'Pierre','lastname'=>'Wayburn','agencies_id'=>NULL],
                    ['firstname'=>'Gwendoline','lastname'=>'Gauthier','agencies_id'=>NULL],
                    ['firstname'=>'Bob','lastname'=>'Sull','agencies_id'=>'1'],
                    ['firstname'=>'Lidya','lastname'=>'Smith','agencies_id'=>'1'],
                    ['firstname'=>'Fred','lastname'=>'Durand','agencies_id'=>'2'],
                ];
                
                //Insert data in the table
                DB::table('artists')->insert($artists);
        
    }
}
