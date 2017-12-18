<?php

namespace Tech\Igorg;

use Dotenv\Dotenv;
use Exception;

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
	 * @throws Exception
	 */
	public function getPopularMovies( $page = 1 ) {

		return $this->getData( 'popularMovies', $page );
	}

	/**
	 * Get top rated movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 * @throws Exception
	 */
	public function getTopRatedMovies( $page = 1 ) {

		return $this->getData( 'topRatedMovies', $page );
	}

	/**
	 * Get now playing movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 * @throws Exception
	 */
	public function getNowPlayingMovies( $page = 1 ) {

		return $this->getData( 'nowPlayingMovies', $page );
	}

	/**
	 * Get upcoming movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 * @throws Exception
	 */
	public function getUpcomingMovies( $page = 1 ) {

		return $this->getData( 'upcomingMovies', $page );
	}

	/**
	 * Get latest movies
	 *
	 * @param int $page
	 *
	 * @return array movies
	 * @throws Exception
	 */
	public function getLatestMovies() {

		return $this->getData( 'latestMovies' );
	}

	/**
	 * Get popular TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 * @throws Exception
	 */
	public function getPopularTvs( $page = 1 ) {

		return $this->getData( 'popularTvs', $page );
	}

	/**
	 * Get top rated TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 * @throws Exception
	 */
	public function getTopRatedTvs( $page = 1 ) {

		return $this->getData( 'topRatedTvs', $page );
	}

	/**
	 * Get on the air TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 * @throws Exception
	 */
	public function getOnTheAirTvs( $page = 1 ) {

		return $this->getData( 'onTheAirTvs', $page );
	}

	/**
	 * Get airing today TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 * @throws Exception
	 */
	public function getAiringTodayTvs( $page = 1 ) {

		return $this->getData( 'airingTodayTvs', $page );
	}

	/**
	 * Get latest TV shows
	 *
	 * @param int $page
	 *
	 * @return array TV shows
	 * @throws Exception
	 */
	public function getLatestTvs() {

		return $this->getData( 'latestTvs' );
	}

	/**
	 * Get movie by id
	 *
	 * @param int $id
	 *
	 * @return object movie
	 * @throws Exception
	 */
	public function getMovieById( $id ) {

		return $this->getData( 'movieById', null, $id );
	}

	/**
	 * Get TV show by id number
	 *
	 * @param int $id
	 *
	 * @return object TV show
	 * @throws Exception
	 */
	public function getTvById( $id ) {

		return $this->getData( 'tvById', null, $id );
	}


	/**
	 * Get TV season
	 *
	 * @param int $tvId
	 * @param int $seasonNumber
	 *
	 * @return object TV season
	 * @throws Exception
	 */
	public function getTvSeason( $id, $seasonNumber = 1 ) {

		return $this->getData( 'tvSeason', null, $id, $seasonNumber );
	}

	/**
	 * Get TV episode
	 *
	 * @param int $tvId
	 * @param  int $seasonNumber
	 * @param int $episodeNumber
	 *
	 * @return object TV episode
	 * @throws Exception
	 */
	public function getTvEpisode( $id, $seasonNumber = 1, $episodeNumber = 1 ) {

		return $this->getData( 'tvEpisode', null, $id, $seasonNumber,
			$episodeNumber );
	}

	/**
	 * Get reviews for movie
	 *
	 * @param int $id
	 *
	 * @return array reviews
	 * @throws Exception
	 */
	public function getReviewsForMovie( $id ) {

		return $this->getData( 'reviewsForMovie', null, $id );
	}

	/**
	 * Get trailers for movie
	 *
	 * @param int $id
	 *
	 * @return array trailers
	 * @throws Exception
	 */
	public function getVideosForMovie( $id ) {

		return $this->getData( 'videosForMovie', null, $id );
	}

	/**
	 * Get trailers for TV show
	 *
	 * @param int $id
	 *
	 * @return array trailers
	 * @throws Exception
	 */
	public function getVideosForTv( $id ) {

		return $this->getData( 'videosForTv', null, $id );
	}

	/**
	 * Get credits for movie
	 *
	 * @param int $id
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function getCreditsForMovie( $id ) {

		return $this->getData( 'creditsForMovie', null, $id );
	}

	/**
	 * Get credits for TV show
	 *
	 * @param int $id
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function getCreditsForTv( $id ) {

		return $this->getData( 'creditsForTv', null, $id );
	}

	/**
	 * Search in movies
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInMovies( $query, $page = 1, $includeAdult = false ) {

		return $this->getData( 'searchInMovies', $page, null,
			null, null, $query, $includeAdult );
	}

	/**
	 * Search in TV shows
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInTvs( $query, $page = 1 ) {

		return $this->getData( 'searchInTvs', $page, null,
			null, null, $query );
	}

	/**
	 * Search for people
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInPeople( $query, $page = 1, $includeAdult = false ) {

		return $this->getData( 'searchInPeople', $page, null,
			null, null, $query, $includeAdult );
	}

	/**
	 * Search in companies
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInCompanies( $query, $page = 1 ) {

		return $this->getData( 'searchInCompanies', $page, null,
			null, null, $query );
	}

	/**
	 * Search in collections
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInCollections( $query, $page = 1 ) {

		return $this->getData( 'searchInCollections', $page, null,
			null, null, $query );
	}

	/**
	 * Search in keywords
	 *
	 * @param string $query
	 * @param int $page
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInKeywords( $query, $page = 1 ) {

		return $this->getData( 'searchInKeywords', $page, null,
			null, null, $query );
	}

	/**
	 * Perform a multi search
	 *
	 * @param string $query
	 * @param int $page
	 * @param bool $includeAdult
	 *
	 * @return array results
	 * @throws Exception
	 */
	public function searchInAll( $query, $page = 1, $includeAdult = false ) {

		return $this->getData( 'searchInAll', $page, null,
			null, null, $query, $includeAdult );
	}


	/**
	 * Fetches json from end point and parses it into object/array of objects
	 *
	 * @param string $url
	 * @param int $page
	 * @param int $id
	 * @param int $seasonNumber
	 * @param int $episodeNumber
	 * @param string $query
	 * @param bool $includeAdult
	 *
	 * @return mixed Array | Object of results
	 * @throws Exception
	 */
	private function getData(
		$mediaType = 'popularMovies',
		$page = 1,
		$id = null,
		$seasonNumber = null,
		$episodeNumber = null,
		$query = null,
		$includeAdult = null
	) {

		$this->validateInput($id, $seasonNumber, $episodeNumber, $includeAdult);

		$url = null;

		switch ( $mediaType ) {
			case 'popularMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'POPULAR_MOVIES' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'topRatedMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TOP_RATED_MOVIES' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'nowPlayingMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'NOW_PLAYING_MOVIES' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'upcomingMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'POPULAR_MOVIES' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'latestMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'LATEST_MOVIES' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'popularTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'POPULAR_TVS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'topRatedTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TOP_RATED_TVS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'onTheAirTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'ON_THE_AIR_TVS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'airingTodayTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'AIRING_TODAY_TVS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'latestTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'LATEST_TVS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'movieById':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'MOVIE' ) .
					       "/" .
					       $id .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'tvById':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TV' ) .
					       "/" .
					       $id .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'tvSeason':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TV' ) .
					       "/" .
					       $id .
					       getenv( 'SEASON' ) .
					       $seasonNumber .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'tvEpisode':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TV' ) .
					       "/" .
					       $id .
					       getenv( 'SEASON' ) .
					       $seasonNumber .
					       getenv( 'EPISODE' ) .
					       $episodeNumber .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'reviewsForMovie':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'MOVIE' ) .
					       "/" .
					       $id .
					       getenv( 'REVIEWS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );

					break;
				}
			case 'videosForMovie':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'MOVIE' ) .
					       "/" .
					       $id .
					       getenv( 'VIDEOS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'videosForTv':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TV' ) .
					       "/" .
					       $id .
					       getenv( 'VIDEOS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'creditsForMovie':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'MOVIE' ) .
					       "/" .
					       $id .
					       getenv( 'CREDITS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'creditsForTv':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'TV' ) .
					       "/" .
					       $id .
					       getenv( 'CREDITS' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' );
					break;
				}
			case 'searchInMovies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'MOVIE' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page .
					       getenv( 'INCLUDE_ADULT' ) .
					       $includeAdult;
					break;
				}
			case 'searchInTvs':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'TV' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'searchInPeople':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'PERSON' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page .
					       getenv( 'INCLUDE_ADULT' ) .
					       $includeAdult;
					break;
				}
			case 'searchInCompanies':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'COMPANY' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'searchInCollections':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'COLLECTION' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'searchInKeywords':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'KEYWORD' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page;
					break;
				}
			case 'searchInAll':
				{
					$url = getenv( 'BASE_URL' ) .
					       getenv( 'SEARCH' ) .
					       getenv( 'MULTI' ) .
					       "?api_key=" . getenv( 'API_KEY' ) .
					       getenv( 'LANGUAGE' ) .
					       getenv( 'QUERY' ) .
					       $query .
					       getenv( 'PAGE' ) .
					       $page .
					       getenv( 'INCLUDE_ADULT' ) .
					       $includeAdult;
					break;
				}
		}


		try {
			$downloaded = @file_get_contents( ( $url ) );

			if ( ! $downloaded ) {
				throw new Exception('Http error occurred' . PHP_EOL);
			}

			$result = @json_decode( $downloaded, true );

			if ( ! $result ) {
				throw new Exception('Parsing error occurred' . PHP_EOL);
			}

			return $result;
		} catch ( Exception $err ) {
			return $err->getMessage();
		}
	}

	/**
	 * Validates the input for correct values
	 *
	 * @param $id
	 * @param $seasonNumber
	 * @param $episodeNumber
	 * @param $includeAdult
	 *
	 * @throws Exception
	 */
	private function validateInput($id, $seasonNumber, $episodeNumber, $includeAdult){
		if(!is_null($id) && !is_integer($id)){
			throw new Exception('MovieID must be integer' . PHP_EOL);
		}
		if(!is_null($seasonNumber) && !is_integer($seasonNumber)){
			throw new Exception('Season number must be integer' . PHP_EOL);
		}
		if(!is_null($episodeNumber) && !is_integer($episodeNumber)){
			throw new Exception('Episode number must be integer' . PHP_EOL);
		}
		if(!is_null($includeAdult) && !is_bool($includeAdult)){
			throw new Exception('includeAdult field must be boolean' . PHP_EOL);
		}
	}
}