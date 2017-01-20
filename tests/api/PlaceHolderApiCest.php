<?php

/**
 * Class SkuImportCest
 */
class PlaceHolderApiCest {

	/**
	 * @param ApiTester $I
	 */
	public function _before(ApiTester $I) {
	}

	/**
	 * @param ApiTester $I
	 */
	public function _after(ApiTester $I) {
	}

	/**
	 * @param ApiTester $I
	 */
	public function getPosts(ApiTester $I) {
		$I->getUrlFromConfiguration('placeHolderApi');

		$I->wantTo('validate /posts response');
		$I->sendGET('/posts');
		$I->seeResponseIsJson();
		$I->canSeeResponseIsValidOnSchemaFile($I->getSchemaFile('posts-schema.json'));
	}

	/**
	 * @param ApiTester $I
	 */
	public function getPhotos(ApiTester $I) {
		$I->getUrlFromConfiguration('placeHolderApi');

		$I->wantTo('validate /photos response');
		$I->sendGET('/photos');
		$I->seeResponseIsJson();
		$I->canSeeResponseIsValidOnSchemaFile($I->getSchemaFile('photos-schema.json'));
	}

	/**
	 * @param ApiTester $I
	 */
	public function getPost(ApiTester $I) {
		$I->getUrlFromConfiguration('placeHolderApi');

		$I->wantTo('validate /posts/1 response');
		$I->sendGET('/posts/1');
		$I->seeResponseIsJson();
		$I->canSeeResponseIsValidOnSchemaFile($I->getSchemaFile('post-schema.json'));
	}
}
