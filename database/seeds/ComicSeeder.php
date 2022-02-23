<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $comic = new Comic();
            $comic->name = $faker->word();
            $comic->author = $faker->word();
            $comic->genre = $faker->word();
            $comic->price = $faker->randomFloat(1, 2, 30);
            $comic->description = $faker->paragraph();
            $comic->save();
        }
    }
}
