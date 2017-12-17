<?php

namespace Tech\Igorg;

use Dotenv\Dotenv;

/**
 *
 * Media class
 */
class Media {

	/**
	 * Get popular movies
	 *
	 * @param int $page
	 *
	 * @return array movies
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
	 * Get top rated movies
	 *
	 * @param int $page
	 *
	 * @return array movies
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
	 * Get now playing movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 */
	public function getNowPlayingMovies( $page = 1) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'NOW_PLAYING_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get upcoming movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 */
	public function getUpcomingMovies( $page = 1) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get latest movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 */
	public function getLatestMovies( $page = 1) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'LATEST_MOVIES' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get popular TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 */
	public function getPopularTvs( $page = 1) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'POPULAR_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get top rated TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 */
	public function getTopRatedTvs( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'TOP_RATED_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get on the air TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 */
	public function getOnTheAirTvs( $page = 1) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'ON_THE_AIR_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get airing today TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 */
	public function getAiringTodayTvs( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'AIRING_TODAY_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get latest TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 */
	public function getLatestTvs( $page = 1 ) {
		$url = getenv( 'BASE_URL' ) .
		       getenv( 'LATEST_TVS' ) .
		       "?api_key=" . getenv( 'API_KEY' ) .
		       getenv( 'LANGUAGE' ) .
		       getenv( 'PAGE' ) .
		       $page;

		return $this->getData($url);
	}

	/**
	 * Get movie by id
	 *
	 * @param int $id
	 *
	 * @return object movie
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
	 * Get TV show by id number
	 *
	 * @param int $id
	 *
	 * @return object TV show
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
	 * Get TV season
	 *
	 * @param int $tvId
	 * @param int $seasonNumber
	 *
	 * @return object TV season
	 */
	public function getTvSeason($tvId, $seasonNumber = 1){
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
	 * Get TV episode
	 *
	 * @param int $tvId
	 * @param  int $seasonNumber
	 * @param int $episodeNumber
	 *
	 * @return object TV episode
	 */
	public function getTvEpisode($tvId, $seasonNumber = 1, $episodeNumber = 1){
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
	 * Get reviews for movie
	 *
	 * @param int $id
	 *
	 * @return array reviews
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
	 * Get trailers for movie
	 *
	 * @param int $id
	 *
	 * @return array trailers
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
	 * Get trailers for TV show
	 *
	 * @param int $id
	 *
	 * @return array trailers
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
	 * Get credits for movie
	 *
	 * @param int $id
	 *
	 * @return array results
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
	 * Get credits for TV show
	 *
	 * @param int $id
	 *
	 * @return array results
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
	 * Search in movies
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
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
	 * Search in TV shows
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
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
	 * Search for people
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
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
	 * Search in companies
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
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
	 * Search in collections
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
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
	 * Search in keywords
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
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
	 * Perform a multi search
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
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

		try {
			return json_decode(file_get_contents($url), true);
		}
		catch (\Exception $exc){
			return $exc->getCode();
		}
	}
}