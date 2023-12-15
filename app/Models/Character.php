<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Character extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function race(){
        return $this->belongsTo(Race::class);
    }
    public function skills(){
        return $this->belongsToMany(Skill::class);
    }


    public static function generateSlug($string){

        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Character::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Character::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}
