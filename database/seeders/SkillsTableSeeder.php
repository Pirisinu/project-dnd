<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;


class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $skills = config("skills");
        foreach($skills as $skill){
            $skill["name"] = $skill['name'];
            $skill["slug"] = Skill::generateSlug($skill['name']);
            $skill["description"] = $skill['description'];
            $skill["peculiar_characteristic"] = $skill['peculiar_characteristic'];
            DB::table("skills")->insert($skill);
        }
    }
}
