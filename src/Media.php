<?php

namespace Tech\Igorg;

use Dotenv\Dotenv;

/**
 *
 * Base class for both Movie and Tv
 */
class Media {

	private $mediaType = 'movies';
	private $page = 1;

	public function getPopularMovies( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return json_decode(file_get_contents($url), true);
	}

	public function getTopRatedMovies( $page ) {

	}

	public function getNowPlayingMovies( $page ) {

	}

	public function getUpcomingMovies( $page ) {

	}

	public function getLatestMovies( $page ) {

	}

	public function getPopularTvs( $page ) {

	}

	public function getTopRatedTvs( $page ) {

	}

	public function getOnTheAirTvs( $page ) {

	}

	public function getAiringTodayTvs( $page ) {

	}

	public function getLatestTvs( $page ) {

	}


	private function getMedias( $mediaType, $page ) {


	}

	private function getMedia( $mediaType ) {

	}

}