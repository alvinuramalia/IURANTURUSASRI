<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog', [
    'title' => "Post By Category : $category->name",
    'posts' => $category->posts->load('category','author'),

    ]);

});

Route::get('/authors/{author:username}', function(User $author){
    return view('blog', [
    'title' => "Post by Author : $author->name",
    'posts' => $author->posts->load('category','author') 
  ]);

});