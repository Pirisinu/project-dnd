<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Character;

class CharacterSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 50; $i++){
            $character = Character::inRandomOrder()->first();
            $skill_id = Skill::inRandomOrder()->first()->id;

            $character->skills()->attach($skill_id);
        }
    }
}
