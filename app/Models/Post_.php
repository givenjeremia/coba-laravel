<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Given Jeremia",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ab officiis, voluptatibus similique, dolores iusto ea a deleniti corrupti nostrum doloribus culpa possimus accusamus perferendis magni rerum minima sunt. Voluptatem!'
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Given Jeremia Sawong",
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dicta repudiandae alias autem non quibusdam facere distinctio quia aut aspernatur. Pariatur cum magni quod odit in quam tempore perspiciatis earum suscipit minus? Dignissimos voluptas, velit blanditiis earum autem ullam reiciendis, natus saepe asperiores atque libero quod eos quibusdam, quo quasi nisi. Dolorum, optio voluptates dolore officia ipsam qui minima ullam tenetur quae beatae tempora suscipit nam consequuntur aspernatur tempore nemo in perspiciatis deleniti rerum incidunt, illum eum? Minus, veritatis accusantium?'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach ($posts as $key) {
        //     if($key['slug']=== $slug){
        //         $new_post = $key;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }

}
