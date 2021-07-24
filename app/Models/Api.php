<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Api 
{
    use HasFactory;
    // private static $auth = "1dea5c571b2d4d97851d0a8b848f4479";
    private static $auth = "7e62daec2fac48a7be42615812f3df98";
    // private static $auth = "485e76e7fda5407e9cc3385e554a67c5";
    //private static $auth = "fdee1eda935c40aa8311451bc8d3157f";
    
    private static $perPage = 6;
    
    public static function all(){
        $collection =  http::get
                    ("https://api.spoonacular.com/recipes/random?apiKey=" .self::$auth. "&number=" .self::$perPage)
                    ->json();
        // dd($collection["recipes"]);
        return collect($collection["recipes"]);
    }
    
    public static function show($id){
        $item = http::get("https://api.spoonacular.com/recipes/${id}/information?apiKey=" .self::$auth)
                ->json();
        // dd($item);
        return collect($item);
    }

    public static function complexSearch($param, $keyword){
        $collection = http::get("https://api.spoonacular.com/recipes/complexSearch?apiKey=" 
                        .self::$auth. "&${param}=${keyword}")
                        ->json();
        // dd($collection["results"]);
        return collect($collection["results"]);
    }
}
