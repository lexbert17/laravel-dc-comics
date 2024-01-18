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
        foreach($comics_list as $comic_list);
        $new_comic = new Comic();
        $new_comic->title = $comic_list['series'];
        $new_comic->title = $comic_list['thumb'];
        $new_comic->title = $comic_list['price'];
        $new_comic->title = $comic_list['type'];
        $new_comic-> save();
    }
}
