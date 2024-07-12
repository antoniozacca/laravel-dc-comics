<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Models\Comic;

class FumettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $comics = Config::get('comics');

        
        foreach ($comics as $comic) {
            // creazione di una nuov ainstanza Comic ( record della tabella)
            $new_comic = new Comic();

            // compilazione delle colonne
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = floatval(substr($comic['price'], 1));
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->artists = implode(', ', $comic['artists']);
            $new_comic->writers = implode(', ', $comic['writers']);

            

            // salvataggio del recor
            $new_comic->save();



            // DB::table('comics')->insert([
            
            // ]);
        }
    }
}