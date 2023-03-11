<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name"=>"alvi nur amalia",
            "email"=>"alvinuramalia13@gmail.com",
            "password"=>bcrypt('12345')
        ]);

        User::create([
            "name"=>"furdany agata",
            "email"=>"furdanyagata24@gmail.com",
            "password"=>bcrypt('12345')
        ]);

        Category::create([
            "name"=>"web programming",
            "slug"=>"web-programming"
        ]);

        Category::create([
            "name"=>"personal",
            "slug"=>"personal"
        ]);
       
        Post::create([
            'title'=>'judul pertama',            
            'slug'=>'judul-pertama',
            'excerpt'=> 'assumenda cumque quod quae asperiores error aspernatur, pariatur ali',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem quaerat nam beatae reprehenderit ad dolor, officia possimus laudantium ab et quos commodi? Recusandae officia ad accusantium incidunt facilis odio quidem officiis facere quisquam illo atque, temporibus deserunt consequuntur in commodi maxime nobis quo reprehenderit doloremque laudantium consectetur molestias sequi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ratione earum incidunt magni eius, tempore doloremque recusandae quam voluptatem? Libero, aperiam molestias soluta asperiores inventore dicta qui saepe adipisci. Sed.</p>',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'judul kedua',   
            'slug'=>'judul-kedua',
            'excerpt'=> 'assumenda cumque quod quae asperiores error aspernatur, pariatur ali',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem quaerat nam beatae reprehenderit ad dolor, officia possimus laudantium ab et quos commodi? Recusandae officia ad accusantium incidunt facilis odio quidem officiis facere quisquam illo atque, temporibus deserunt consequuntur in commodi maxime nobis quo reprehenderit doloremque laudantium consectetur molestias sequi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ratione earum incidunt magni eius, tempore doloremque recusandae quam voluptatem? Libero, aperiam molestias soluta asperiores inventore dicta qui saepe adipisci. Sed.</p>',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'judul ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=> 'assumenda cumque quod quae asperiores error aspernatur, pariatur ali',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem quaerat nam beatae reprehenderit ad dolor, officia possimus laudantium ab et quos commodi? Recusandae officia ad accusantium incidunt facilis odio quidem officiis facere quisquam illo atque, temporibus deserunt consequuntur in commodi maxime nobis quo reprehenderit doloremque laudantium consectetur molestias sequi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ratione earum incidunt magni eius, tempore doloremque recusandae quam voluptatem? Libero, aperiam molestias soluta asperiores inventore dicta qui saepe adipisci. Sed.</p>',
            'category_id'=>2,
            'user_id'=>2
        ]);

        Post::create([
            'title'=>'judul keempat',
            'slug'=>'judul-keempat',
            'excerpt'=> 'assumenda cumque quod quae asperiores error aspernatur, pariatur ali',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero rem quaerat nam beatae reprehenderit ad dolor, officia possimus laudantium ab et quos commodi? Recusandae officia ad accusantium incidunt facilis odio quidem officiis facere quisquam illo atque, temporibus deserunt consequuntur in commodi maxime nobis quo reprehenderit doloremque laudantium consectetur molestias sequi?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ratione earum incidunt magni eius, tempore doloremque recusandae quam voluptatem? Libero, aperiam molestias soluta asperiores inventore dicta qui saepe adipisci. Sed.</p>',
            'category_id'=>2,
            'user_id'=>2
        ]);
    }
}
