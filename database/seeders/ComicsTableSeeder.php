<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');
        foreach ($comics_list as $comic_list){;
        $new_comic = new Comic();
        $new_comic->title = $comic_list['title'];
        $new_comic->description = $comic_list['description'];
        $new_comic->thumb = $comic_list['thumb'];
        $new_comic->price = $comic_list['price'];
        $new_comic->series = $comic_list['series'];
        $new_comic->sale_date = $comic_list['sale_date'];
        $new_comic->type = $comic_list['type']; 
       
        $new_comic-> save();
        }
    }
}
