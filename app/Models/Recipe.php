<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ["id_recipe", "title", "image", "rating"];

    public static function checkData($id){
        $data = Recipe::where("id_recipe", $id)->first();
        if(!isset($data)){
            // dd($data);
            return false;
        }
        return true;
    }
}
