<?php

use Dotenv\Dotenv;

require_once './vendor/autoload.php';

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$test = new \Tech\Igorg\Media();

echo $test->getPopularMovies(1);