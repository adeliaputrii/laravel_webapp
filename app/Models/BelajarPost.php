<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Adhelia Blog",
            "slug" => "judul-blog-pertama",
            "author" => "Adhelia Putri Wardhana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, vel quidem totam voluptate blanditiis quisquam sed enim, hic voluptates, natus quia ex. Consectetur iusto aperiam excepturi quas nulla repellat tempore nam fugiat est delectus nisi commodi quidem enim, dicta soluta fugit accusamus, eum maiores facilis velit maxime ex. Autem, eveniet?"
        ],
        [
            "title" => "Punya Ezel",
            "slug" => "judul-blog-kedua",
            "author" => "Alfharezel Attharazka Wardhana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sint explicabo deserunt autem sequi ratione quod molestias expedita laboriosam voluptate tempore et at maiores earum sunt impedit nisi, tenetur reiciendis soluta libero ipsa minima. Odio esse ducimus, soluta aut asperiores explicabo debitis excepturi quod ipsum quasi fuga accusantium ratione id minus molestias. Aliquam commodi possimus doloribus ipsam facere, illum minima laudantium quibusdam vitae, deserunt nisi minus quae soluta, mollitia optio molestias ex! Delectus cum dicta quo illo qui. Nihil reiciendis earum quaerat! Perspiciatis tempora optio atque fugiat praesentium iure voluptas consequuntur omnis mollitia? Voluptatem porro, iste dolore at vitae exercitationem."
        ] 
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all(); 
        return $posts->firstWhere('slug', $slug);
    }   
}

