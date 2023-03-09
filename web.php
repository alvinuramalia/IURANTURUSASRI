<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('home',[
        "title"=>"home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title"=>"about",
        "nama" => "alvi nur amalia",
        "kelas" => "TE1A polines",
        "image" => "img.png"
    ]);

});


Route::get('/blog', [PostController::class, 'index']);
//halaman single route
Route::get('posts/{post:slug}', [PostController::class, 'show']);