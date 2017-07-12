<?php
namespace Dfe\Salesforce\OAuth;
use Df\Core\Exception as DFE;
use Dfe\Salesforce\Settings\General\OAuth as S;
// 2017-07-10
final class App extends \Df\OAuth\App {
	/**
	 * 2017-07-10
	 * @override
	 * @see \Df\OAuth\App::ss()
	 * @used-by \Df\OAuth\App::getAndSaveTheRefreshToken()
	 * @used-by \Df\OAuth\App::pCommon()
	 * @used-by \Df\OAuth\App::requestToken()
	 * @used-by \Df\OAuth\App::token()
	 * @used-by \Df\OAuth\FE\Button::s()
	 * @return S
	 */
	function ss() {return S::s();}

	/**
	 * 2017-07-10
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_oauth_endpoints.htm#topic-title
	 * @override
	 * @see \Df\OAuth\App::urlAuth()
	 * @used-by \Df\OAuth\FE\Button::onFormInitialized()
	 * @return string
	 */
	function urlAuth() {return self::url('authorize');}

	/**
	 * 2017-07-11
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_oauth_endpoints.htm#topic-title
	 * @override
	 * @see \Df\OAuth\App::urlToken()
	 * @used-by \Df\OAuth\App::requestToken()
	 * @return string
	 */
	protected function urlToken() {return self::url('token');}

	/**
	 * 2017-07-11
	 * @used-by urlAuth()
	 * @used-by urlToken()
	 * @param string $s
	 * @return string
	 */
	private static function url($s) {return "https://login.salesforce.com/services/oauth2/$s";}
}