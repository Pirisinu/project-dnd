<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $character = new Character();
            $character->name = $faker->name();
            $character->race_id = Race::inRandomOrder()->first()->id;
            $character->slug = Character::generateSlug($character->name);
            $character->height = $faker->numberBetween(50, 250);
            $character->weight = $faker->numberBetween(20, 200);
            $character->background = $faker->text();
            $character->image = $faker->imageUrl(640, 480, $character->name);
            $character->armor_class = $faker->numberBetween(10, 20);
            $character->str = $faker->numberBetween(3, 18);
            $character->dex = $faker->numberBetween(3, 18);
            $character->con = $faker->numberBetween(3, 18);
            $character->int = $faker->numberBetween(3, 18);
            $character->wis = $faker->numberBetween(3, 18);
            $character->cha = $faker->numberBetween(3, 18);

            $character->save();
        }
    }
}
