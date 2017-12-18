<?php

use Dotenv\Dotenv;
use Tech\Igorg\Media;

// Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Load .env settings file
$dotenv = new Dotenv(__DIR__);
$dotenv->load();


// Create new Media instance
$media = new Media();


// Available methods:
try {
	$media->getPopularMovies();

	$media->getNowPlayingMovies();

	$media->getUpcomingMovies();

	$media->getLatestMovies();

	$media->getPopularTvs();

	$media->getTopRatedTvs();

	$media->getAiringTodayTvs();

	$media->getOnTheAirTvs();

	$media->getLatestTvs();

	$media->getMovieById( 346364 );

	$media->getTvById( 1418 );

	$media->getTvSeason( 1418 );

	$media->getTvEpisode( 1418 );

	$media->getReviewsForMovie( 346364 );

	$media->getVideosForMovie( 346364 );

	$media->getVideosForTv( 1418 );

	$media->getCreditsForMovie( 346364 );

	$media->getCreditsForTv( 1418 );

	$media->searchInMovies( 'Pulp' );

	$media->searchInTvs( 'Game' );

	$media->searchInPeople( 'John' );

	$media->searchInCompanies( 'warner' );

	$media->searchInCollections( 'last' );

	$media->searchInKeywords( 'drama' );

	$media->searchInAll( 'Bill' );

}

catch(Exception $exception){
	echo $exception->getMessage();
}