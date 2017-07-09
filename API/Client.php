<?php
namespace Dfe\Salesforce\API;
use Dfe\Salesforce\Settings\General as G;
// 2017-07-09
final class Client extends \Df\API\Client {
	/**
	 * 2017-07-09
	 * @override
	 * @see \Df\API\Client::_construct()
	 * @used-by \Df\API\Client::__construct()
	 * @see \Df\ZohoBI\API\Client::_construct()
	 */
	final protected function _construct() {parent::_construct(); $this->addFilterJsonDecode();}

	/**
	 * 2017-07-09
	 * Note 1.
	 * Despite the official documentation says that the JSON format is default, it is not true
	 * (at least, the «services/data» resource returns XML by defalt):
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/dome_versions.htm
	 * Note 2.
	 * «JSON is the default.
	 * You can use the HTTP ACCEPT header to select either JSON or XML, or append .json or .xml to the URI
	 * (for example, /Account/001D000000INjVe.json).»
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_rest_resources.htm#intro_rest_resources
	 * @override
	 * @see \Df\API\Client::headers()
	 * @used-by \Df\API\Client::__construct()
	 * @used-by \Df\API\Client::p()
	 * @return array(string => string)
	 */
	final protected function headers() {return ['Accept' => 'application/json'];}

	/**
	 * 2017-07-09
	 * @override
	 * @see \Df\API\Client::uriBase()
	 * @used-by \Df\API\Client::__construct()
	 * @used-by \Df\API\Client::p()
	 * @return string
	 */
	protected function uriBase() {return sprintf('https://%s/', G::s()->domain());}
}