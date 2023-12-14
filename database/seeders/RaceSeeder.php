<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        $races = config('races');
        foreach ($races as $race) {
            $race['slug'] = Race::generateSlug($race['name'], Race::class);
            $race['mod_str'] = $faker->numberBetween(-3, 3);
            $race['mod_dex'] = $faker->numberBetween(-3, 3);
            $race['mod_con'] = $faker->numberBetween(-3, 3);
            $race['mod_int'] = $faker->numberBetween(-3, 3);
            $race['mod_wis'] = $faker->numberBetween(-3, 3);
            $race['mod_cha'] = $faker->numberBetween(-3, 3);
            DB::table('races')->insert($race);
        }
    }
}
