<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(App\Comment::class, function (Faker $faker) {
    $posts = Post::all();
    $post_ids = array();
    foreach($posts as $post){
        array_push($post_ids, $post->id);
    }

    return [
        'post_id' => $post_ids[array_rand($post_ids)],
        'message' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
