<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api;
use App\Models\Recipe;

class ApiController extends Controller
{
    public function index(){
        // $perPage = 6;
        return view("index", [
            "title" => "home",
            "collection" => Api::all()
        ]);
    }

    public function show($id){
        $rating = rand(3,5);
        return view("receipe-post", [
            "title" => "receipe-post",
            "rating" =>$rating,
            "item" => Api::show($id),
            "isSaved" => Recipe::checkData($id)
        ]);
    }

    public function cathegory($param, $keyword){
        return view("custom-list", [
            "title" => "custom-list",
            "collection" => Api::complexSearch($param, $keyword)
        ]);
    }

    public function customSearch(Request $req){
        $req = $req->input();
        $keyword = $req["search"];
        $param = "query";
        return view("custom-list", [
            "title" => "custom-list",
            "collection" => Api::complexSearch($param, $keyword)
        ]);
        // dd($req->input());
    }
}
