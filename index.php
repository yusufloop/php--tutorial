<?php

$books = [
    [
        'name' => 'ikan',
        'author' => 'ayam',
        'releaseYear' => 1992,
        'url' => 'google.com',
    ],
    [
        'name' => '1 ikan',
        'author' => '2 ayam',
        'releaseYear' => 1990,
        'url' => 'google.com',
    ],
    [
        'name' => '2 ikan',
        'author' => '2 ayam',
        'releaseYear' => 1993,
        'url' => 'google.com',
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];

    foreach($items as $item){
        if($fn($item)){
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
}

$filteredBooks = array_filter($books, function($book){
    return $book['author'] === '2 ayam';
});

require "index.view.php";

// $name = 'Laracasts';
// $cost = 15;

// $business= [
//     'name' => 'LAracast',
//     'cost' => 15,
//     'categories' => ["testing", "pHP", "JS"],
// ];

// function register($user){


// }

// require "index.view.php";