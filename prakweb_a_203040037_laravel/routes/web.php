<?php

use App\Models\Post;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/', function () {
    return view('Home',[
        "title"=>"Home"
    ]);
});


Route::get('/about', function () {
    return view('about',[
    "title"=>"About",
    "name"=>"Bintang Yandi Putra",
    "email"=>"acutyp9@gmail.com",
    "image"=>"bintang.jpg"
    ]
);
});

 

Route::get('/blog', [PostController::class, 'index']);

//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
