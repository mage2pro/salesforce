<?php
namespace Dfe\Salesforce\T;
use Dfe\Salesforce\Settings\General as G;
use Dfe\Salesforce\API\Facade as F;
// 2017-07-08
final class Basic extends TestCase {
	/** @test 2017-07-08 */
	function t00() {}

	/**
	 * @test 2017-07-08
	 * «Lists summary information about each Salesforce version currently available,
	 * including the version, label, and a link to each version's root.
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/resources_versions.htm
	 * «You do not need authentication to retrieve the list of versions.»
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/dome_versions.htm
	 */
	function t01_versions() {echo df_json_encode(F::s()->versions());}

	/** 2017-07-09 */
	function t02_the_latest_version() {echo df_json_prettify(file_get_contents(self::url(
		df_last(df_http_json(self::url('services/data')))['url']
	)));}

	/** 2017-07-09 */
	function t03_invalid() {echo df_json_encode(F::s()->invalid());}

	/**
	 * 2017-07-09
	 * @param string $s
	 * @return string
	 */
	private static function url($s) {return sprintf('https://%s/%s.json', G::s()->domain(), df_trim_ds_left($s));}
}