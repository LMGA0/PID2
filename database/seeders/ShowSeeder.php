<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Location;
use App\Models\Show;

class ShowSeeder extends Seeder
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
        Show::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //Define the data
        $shows = [
            [
                'slug'=>null, 
                'title'=>'Ayiti',
                'description'=> "Un homme est bloqué à l\'aéroport. \n "
                .'Questionné par les douaniers...' ,
                'poster_url'=>'ayiti.jpg',
                'location_slug'=>'espace-delvaux-la-venerie',
                'bookable'=>true,
                'price'=>8.50,
            ],
            [
                'slug'=>null, 
                'title'=>'Cible mouvante',
                'description'=> 'Dans ce "thriller d\'anticipation", des adultes semblent alimenter...',
                'poster_url'=>'cible.jpg',
                'location_slug'=>'dexia-art-center',
                'bookable'=>true,
                'price'=>9.00,
            ],
            [
                'slug'=>null, 
                'title'=>'Ceci n\'est pas un chanteur belge',
                'description'=> "Non peut-être?!\nEntre Magritte (pour le réalisme comique)",
                'poster_url'=>'claudebelgesaison220.jpg',
                'location_slug'=>null,
                'bookable'=>false,
                'price'=>5.50,
            ],
            [
                'slug'=>null, 
                'title'=>'Manneke...!',
                'description'=> 'A tour de rôle, Pierre se joue de ses oncles,'
                .'tantes, grands-parents, et surtout de sa mère',
                'poster_url'=>'wayburn.jpg',
                'location_slug'=>'la-samaritaine',
                'bookable'=>true,
                'price'=>10.50,
            ],
        ];

        //Prepare the data
        foreach ($shows as &$data){
            //Search the location for a given location's slug
            $location = Location::firstWhere('slug',$data['location_slug']);
            unset($data['location_slug']);

            $data['slug'] = Str::slug($data['title'],'-');
            $data['location_id'] = $location->id ?? null;
        }
        unset($data);

        //Insert data in the table
        DB::table('shows')->insert($shows);
    }
}