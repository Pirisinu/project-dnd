<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Race extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function generateSlug($string){

        $slug =  Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Race::where('slug', $slug)->first();
        $c = 1;

        while($exists){
            $slug = $original_slug. '-'. $c;
            $exists = Race::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
