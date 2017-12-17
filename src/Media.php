<?php

namespace Tech\Igorg;

use Dotenv\Dotenv;

/**
 *
 * Base class for both Movie and Tv
 */
class Media {

	/**
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function getPopularMovies( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function getTopRatedMovies( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TOP_RATED_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getNowPlayingMovies( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'NOW_PLAYING_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getUpcomingMovies( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getLatestMovies( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'LATEST_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getPopularTvs( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getTopRatedTvs( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TOP_RATED_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getOnTheAirTvs( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'ON_THE_AIR_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getAiringTodayTvs( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'AIRING_TODAY_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $page
	 *
	 * @return mixed
	 */
	public function getLatestTvs( $page ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'LATEST_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getMovieById($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'MOVIE' ) .
		       "/" .
		       $id .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getTvById($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TV' ) .
		       "/" .
		       $id .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}


	/**
	 * @param $tvId
	 * @param $seasonNumber
	 *
	 * @return mixed
	 */
	public function getTvSeason($tvId, $seasonNumber){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TV' ) .
		       "/" .
		       $tvId .
		       getenv('SEASON') .
		       $seasonNumber .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $tvId
	 * @param $seasonNumber
	 * @param $episodeNumber
	 *
	 * @return mixed
	 */
	public function getTvEpisode($tvId, $seasonNumber, $episodeNumber){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TV' ) .
		       "/" .
		       $tvId .
		       getenv('SEASON') .
		       $seasonNumber .
		       getenv('EPISODE') .
		       $episodeNumber .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getReviewsForMovie($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'MOVIE' ) .
		       "/" .
		       $id .
		       getenv('REVIEWS') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getVideosForMovie($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'MOVIE' ) .
		       "/" .
		       $id .
		       getenv('VIDEOS') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getVideosForTv($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TV' ) .
		       "/" .
		       $id .
		       getenv('VIDEOS') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getCreditsForMovie($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'MOVIE' ) .
		       "/" .
		       $id .
		       getenv('CREDITS') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getCreditsForTv($id){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TV' ) .
		       "/" .
		       $id .
		       getenv('CREDITS') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' );

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return mixed
	 */
	public function searchInMovies($query, $page = 1, $includeAdult = false){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('MOVIE') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page .
		       getenv('INCLUDE_ADULT') .
		       $includeAdult;

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function searchInTvs($query, $page = 1){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('TV') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page;
		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return mixed
	 */
	public function searchInPeople($query, $page = 1, $includeAdult = false){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('PERSON') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page .
		       getenv('INCLUDE_ADULT') .
		       $includeAdult;

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function searchInCompanies($query, $page = 1){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('COMPANY') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function searchInCollections($query, $page = 1){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('COLLECTION') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 *
	 * @return mixed
	 */
	public function searchInKeywords($query, $page = 1){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('KEYWORD') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page;

		return $this->getData($url);
	}

	/**
	 * @param $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return mixed
	 */
	public function searchInAll($query, $page = 1, $includeAdult = false){
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'SEARCH' ) .
		       getenv('MULTI') .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv('QUERY') .
		       $query .
		       getenv('PAGE') .
		       $page .
		       getenv('INCLUDE_ADULT') .
		       $includeAdult;

		return $this->getData($url);
	}


	/**
	 * Fetches json from end point and parses it into object/array of objects
	 *
	 * @param string $url
	 *
	 * @return mixed Array | Object of results
	 */
	private function getData($url){
		return json_decode(file_get_contents($url), true);
	}
}