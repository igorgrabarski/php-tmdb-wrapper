<?php

namespace Tech\Igorg;

/**
 * Basic Tests for Media class methods
 */

use PHPUnit\Framework\TestCase;

class MediaTest extends TestCase {

	public function testGetPopularMovies(){

		$media = new Media();

		$this->assertNotNull($media->getPopularMovies());
	}

	public function testGetPopularMovies2(){

		$media = new Media();

		$this->assertNotNull($media->getPopularMovies(rand(2, 900)));
	}

	public function testGetTopRatedMovies(){

		$media = new Media();

		$this->assertNotNull($media->getTopRatedMovies());
	}

	public function testGetTopRatedMovies2(){

		$media = new Media();

		$this->assertNotNull($media->getTopRatedMovies(rand(2, 300)));
	}

	public function testGetNowPlayingMovies(){

		$media = new Media();

		$this->assertNotNull($media->getNowPlayingMovies());
	}

	public function testGetNowPlayingMovies2(){

		$media = new Media();

		$this->assertNotNull($media->getNowPlayingMovies(rand(2, 30)));
	}

	public function testGetUpcomingMovies(){

		$media = new Media();

		$this->assertNotNull($media->getUpcomingMovies());
	}

	public function testGetUpcomingMovies2(){

		$media = new Media();

		$this->assertNotNull($media->getUpcomingMovies(rand(2, 10)));
	}


	public function testGetLatestMovies(){

		$media = new Media();

		$this->assertNotNull($media->getLatestMovies());
	}



	public function testGetPopularTvs(){

		$media = new Media();

		$this->assertNotNull($media->getPopularTvs());
	}

	public function testGetPopularTvs2(){

		$media = new Media();

		$this->assertNotNull($media->getPopularTvs(rand(2, 900)));
	}


	public function testGetTopRatedTvs(){

		$media = new Media();

		$this->assertNotNull($media->getTopRatedTvs());
	}

	public function testGetTopRatedTvs2(){

		$media = new Media();

		$this->assertNotNull($media->getTopRatedTvs(rand(2, 30)));
	}

	public function testGetOnTheAirTvs(){

		$media = new Media();

		$this->assertNotNull($media->getOnTheAirTvs());
	}

	public function testGetOnTheAirTvs2(){

		$media = new Media();

		$this->assertNotNull($media->getOnTheAirTvs(rand(2, 5)));
	}


	public function testGetAiringTodayTvs(){

		$media = new Media();

		$this->assertNotNull($media->getAiringTodayTvs());
	}

	public function testGetAiringTodayTvs2(){

		$media = new Media();

		$this->assertNotNull($media->getAiringTodayTvs(2));
	}


	public function testGetLatestTvs(){

		$media = new Media();

		$this->assertNotNull($media->getLatestTvs());
	}

	public function testGetMovieById(){

		$media = new Media();

		$this->assertNotNull($media->getMovieById(346364));
	}

	public function testGetTvById(){

		$media = new Media();

		$this->assertNotNull($media->getTvById(1418));
	}



	public function testGetTvSeason(){

		$media = new Media();

		$this->assertNotNull($media->getTvSeason(1418));
	}

	public function testGetTvSeason2(){

		$media = new Media();

		$this->assertNotNull($media->getTvSeason(1418, 2));
	}

	public function testGetTvEpisode(){

		$media = new Media();

		$this->assertNotNull($media->getTvEpisode(1418));
	}

	public function testGetTvEpisode2(){

		$media = new Media();

		$this->assertNotNull($media->getTvEpisode(1418, 2));
	}

	public function testGetTvEpisode3(){

		$media = new Media();

		$this->assertNotNull($media->getTvEpisode(1418, 2, 2));
	}

	public function testGetReviewsForMovie(){

		$media = new Media();

		$this->assertNotNull($media->getReviewsForMovie(346364));
	}


	public function testGetVideosForMovie(){

		$media = new Media();

		$this->assertNotNull($media->getVideosForMovie(346364));
	}

	public function testGetReviewsForTv(){

		$media = new Media();

		$this->assertNotNull($media->getVideosForTv(1418));
	}


	public function testGetCreditsForMovie(){

		$media = new Media();

		$this->assertNotNull($media->getCreditsForMovie(346364));
	}


	public function testGetCreditsForTv(){

		$media = new Media();

		$this->assertNotNull($media->getCreditsForTv(1418));
	}


	public function testSearchInMovies(){

		$media = new Media();

		$this->assertNotNull($media->searchInMovies('last'));
	}

	public function testSearchInMovies2(){

		$media = new Media();

		$this->assertNotNull($media->searchInMovies('last', 2));
	}

	public function testSearchInMovies3(){

		$media = new Media();

		$this->assertNotNull($media->searchInMovies('last', 2, true));
	}



	public function testSearchInTvs(){

		$media = new Media();

		$this->assertNotNull($media->searchInTvs('last'));
	}

	public function testSearchInTvs2(){

		$media = new Media();

		$this->assertNotNull($media->searchInTvs('last', 2));
	}



	public function testSearchInPeople(){

		$media = new Media();

		$this->assertNotNull($media->searchInPeople('John'));
	}

	public function testSearchInPeople2(){

		$media = new Media();

		$this->assertNotNull($media->searchInPeople('John', 2));
	}

	public function testSearchInPeople3(){

		$media = new Media();

		$this->assertNotNull($media->searchInPeople('John', 2, true));
	}


	public function testSearchInCompanies(){

		$media = new Media();

		$this->assertNotNull($media->searchInCompanies('Warner'));
	}

	public function testSearchInCompanies2(){

		$media = new Media();

		$this->assertNotNull($media->searchInCompanies('Warner', 2));
	}


	public function testSearchInCollections(){

		$media = new Media();

		$this->assertNotNull($media->searchInCollections('John'));
	}

	public function testSearchInCollections2(){

		$media = new Media();

		$this->assertNotNull($media->searchInCollections('John', 2));
	}

	public function testSearchInKeywords(){

		$media = new Media();

		$this->assertNotNull($media->searchInKeywords('action'));
	}

	public function testSearchInKeywords2(){

		$media = new Media();

		$this->assertNotNull($media->searchInKeywords('action', 2));
	}


	public function testSearchInAll(){

		$media = new Media();

		$this->assertNotNull($media->searchInAll('John'));
	}

	public function testSearchInAll2(){

		$media = new Media();

		$this->assertNotNull($media->searchInAll('John', 2));
	}

	public function testSearchInAll3(){

		$media = new Media();

		$this->assertNotNull($media->searchInAll('John', 2, true));
	}
}