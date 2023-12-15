<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public static function generateSlug($name){
        $slug = Str::slug($name, "-");
        $original_slug = $slug;
        $exists = Skill::where("slug", $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug . "-" . $c;
            $exists = Skill::where("slug", $slug)->first();
            $c++;
        }

        return $slug;
    }
}
