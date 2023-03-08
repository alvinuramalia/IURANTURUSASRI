<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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
            "title" => "kutunggukau di tegal",
            "slug" => "kutunggukau-di-tegal",
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

        public static function all()
        {
            return collect(self::$blog_posts);
        } 

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', "$slug");
        }
    }