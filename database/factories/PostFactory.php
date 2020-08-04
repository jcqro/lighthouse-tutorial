<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'author_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'reply' => $faker->paragraph,
    ];
});
