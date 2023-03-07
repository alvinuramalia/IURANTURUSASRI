<?php

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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "merindu cahaya de amstel",
            "slug" => "merindu-cahaya-de-amstel",
            "author" => "sandika galih",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cupiditate doloribus aliquam repudiandae, quis numquam commodi sint provident. 
            Fugit dignissimos dicta fuga, impedit velit a necessitatibus eos! Fugit accusamus 
            tenetur commodi. Odio, obcaecati vitae temporibus ipsa, itaque repellat maiores 
            ratione autem beatae dolorem quos sequi mollitia illum,
            eius ea vero exercitationem perferendis sed ad eum cum et soluta.
            Quia omnis ea sit excepturi consequatur quas nihil velit impedit nesciunt
            obcaecati numquam illum,  provident totam blanditiis, expedita soluta, optio magnam voluptatum dolor."
        ],
    
        [
            "title" => "kutunggukau di blora",
            "slug" => "kutunggukau-di-blora",
            "author" => "sandika galih2",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cupiditate doloribus aliquam repudiandae, quis numquam commodi sint provident. 
            Fugit dignissimos dicta fuga, impedit velit a necessitatibus eos! Fugit accusamus 
            tenetur commodi. Odio, obcaecati vitae temporibus ipsa, itaque repellat maiores 
            ratione autem beatae dolorem quos sequi mollitia illum,
            eius ea vero exercitationem perferendis sed ad eum cum et soluta.
            Quia omnis ea sit excepturi consequatur quas nihil velit impedit nesciunt
            obcaecati numquam illum,  provident totam blanditiis, expedita soluta, optio magnam voluptatum dolor."
        ]
    
        ];

       return view ('blog', [
        "title"=>"blog",
        "posts" => $blog_posts
       ]
    );
});

//halam single route
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "merindu cahaya de amstel",
            "slug" => "merindu-cahaya-de-amstel",
            "author" => "sandika galih",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cupiditate doloribus aliquam repudiandae, quis numquam commodi sint provident. 
            Fugit dignissimos dicta fuga, impedit velit a necessitatibus eos! Fugit accusamus 
            tenetur commodi. Odio, obcaecati vitae temporibus ipsa, itaque repellat maiores 
            ratione autem beatae dolorem quos sequi mollitia illum,
            eius ea vero exercitationem perferendis sed ad eum cum et soluta.
            Quia omnis ea sit excepturi consequatur quas nihil velit impedit nesciunt
            obcaecati numquam illum,  provident totam blanditiis, expedita soluta, optio magnam voluptatum dolor."
        ],
    
        [
            "title" => "kutunggukau di blora",
            "slug" => "kutunggukau-di-blora",
            "author" => "sandika galih2",
            "body" => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Cupiditate doloribus aliquam repudiandae, quis numquam commodi sint provident. 
            Fugit dignissimos dicta fuga, impedit velit a necessitatibus eos! Fugit accusamus 
            tenetur commodi. Odio, obcaecati vitae temporibus ipsa, itaque repellat maiores 
            ratione autem beatae dolorem quos sequi mollitia illum,
            eius ea vero exercitationem perferendis sed ad eum cum et soluta.
            Quia omnis ea sit excepturi consequatur quas nihil velit impedit nesciunt
            obcaecati numquam illum,  provident totam blanditiis, expedita soluta, optio magnam voluptatum dolor."
        ]
    
        ];

        $new_post=[];
        foreach ($blog_posts as $post) {
            # code...
            if ($post["slug"] === $slug) {
                $new_post = $post;
            }

        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});