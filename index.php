<?php

require_once 'vendor/autoload.php';

use App\Spiders\ImdbTopMoviesSpider;
use App\Spiders\OpenLibrarySpider;
use RoachPHP\Roach;

$topMovies = Roach::collectSpider(ImdbTopMoviesSpider::class);

$topMovies = array_map(fn($item) => $item->all(), $topMovies);

file_put_contents('./output/top-movies.json', json_encode($topMovies, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));


$trendingBooks = Roach::collectSpider(OpenLibrarySpider::class);

$trendingBooks = array_map(fn($item) => $item->all(), $trendingBooks);

file_put_contents('./output/trending-books.json', json_encode($trendingBooks, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
