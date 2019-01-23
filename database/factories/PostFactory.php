<?php

use Faker\Generator as Faker;
use App\Board;
use Illuminate\Support\Facades\Log;
$factory->define(App\Post::class, function (Faker $faker) {
    $boards = Board::all();
    $board_ids = array();
    foreach($boards as $board){
        array_push($board_ids, $board->id);
    }
    
    return [
        'board_id' => $board_ids[array_rand($board_ids)],
        'title' => $faker->sentence(),
        'message' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
