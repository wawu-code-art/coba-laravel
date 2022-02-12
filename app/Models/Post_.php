<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "heribertus wiku",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem a maxime dignissimos harum, magnam nobis blanditiis reiciendis deleniti quos sint, nesciunt ipsum voluptatem praesentium suscipit minima tempora atque corrupti similique!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "hapsoro",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem a maxime dignissimos harum, magnam nobis blanditiis reiciendis deleniti quos sint, nesciunt ipsum voluptatem praesentium suscipit minima tempora atque corrupti similique!",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstwhere('slug', $slug);
    }
}
