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
	 */
	protected function _construct() {parent::_construct(); $this->resJson();}

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
	protected function headers() {return [
		'Accept' => 'application/json'
		// 2017-07-10
		// Note 1:
		// «The REST API allows the use of compression on the request and the response,
		// using the standards defined by the HTTP 1.1 specification.
		// For better performance, we suggest that clients accept and support compression
		// as defined by the HTTP 1.1 specification.
		// To use compression, include the HTTP header
		// `Accept-Encoding: gzip` or `Accept-Encoding: deflate` in a request.
		// The REST API compresses the response if the client properly specifies this header.
		// The response includes the header `Content-Encoding: gzip` or `Accept-Encoding: deflate`.»
		// https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_rest_compression.htm#topic-title
		// Note 2:
		// An example of a response's headers:
		// 		Connection: close
		// 		Content-encoding: gzip
		// 		Content-security-policy: referrer origin-when-cross-origin
		// 		Content-type: application/json;charset=UTF-8
		// 		Date: Mon, 10 Jul 2017 03:57:26 GMT
		// 		Expires: Thu, 01 Jan 1970 00:00:00 GMT
		// 		Public-key-pins-report-only: pin-sha256="9n0izTnSRF+W4W4JTq51avTTTTTTQB8duS2bxVLfzXsY="; pin-sha256="6m4uJ26w5zoo/DLDmYTTTTTTWpZ8/GSCPe6SBri8Euw0="; max-age=86400; report-uri="https://calm-dawn-26291.herokuapp.com/hpkp-report/00D0Y000000ZB09";
		// 		Set-cookie: BrowserId=68g3aObUTTTTTTXZwib5Ag;Path=/;Domain=.salesforce.com;Expires=Fri, 08-Sep-2017 03:57:26 GMT
		// 		Strict-transport-security: max-age=31536000; includeSubDomains
		// 		Transfer-encoding: chunked
		// 		Vary: Accept-Encoding
		,'Accept-Encoding' => 'gzip'
		,'Authorization' => 'Bearer ' . df_oauth_app($this)->token()
	];}

	/**
	 * 2017-07-09
	 * @override
	 * @see \Df\API\Client::urlBase()
	 * @used-by \Df\API\Client::__construct()
	 * @used-by \Df\API\Client::_p()
	 * @return string
	 */
	protected function urlBase() {return sprintf('https://%s/', G::s()->domain());}
}