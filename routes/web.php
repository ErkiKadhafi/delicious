<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [ApiController::class, "index"]);

Route::get('about', function () {
    return view('about', ["title" => "about"]);
});

Route::get('blog-post', function () {
    return view('blog-post', ["title" => "blog-post"]);
});

Route::get('receipe-post', function () {
    return view('receipe-post', ["title" => "receipe-post"]);
});

Route::get('elements', function () {
    return view('elements', ["title" => "elements"]);
});

// Route::get('contact', function () {
//     return view('contact', ["title" => "contact"]);
// });

Route::post("/recipe", [RecipeController::class, "store"]);
Route::get("/recipe", [RecipeController::class, "index"]);
Route::delete("/recipe/{id}", [RecipeController::class, "destroy"]);

Route::get('custom-list/{param}/{keyword}', [ApiController::class, "cathegory"]);
Route::post('custom-list', [ApiController::class, "customSearch"]);

Route::get('/', [ApiController::class, "index"]);
Route::get('/{id}', [ApiController::class, "show"]);