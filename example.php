<?php

use Dotenv\Dotenv;

require_once './vendor/autoload.php';

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$test = new \Tech\Igorg\Media();

print_r($test->searchInPeople('John', 2, true));