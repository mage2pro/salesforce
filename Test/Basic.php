<?php
namespace Dfe\Salesforce\Test;
use Dfe\Salesforce\Settings\General as G;
use Dfe\Salesforce\API\Facade as F;
# 2017-07-08
final class Basic extends TestCase {
	/** 2017-07-08 @test */
	function t00():void {}

	/**
	 * 2017-07-08
	 * @test
	 * «Lists summary information about each Salesforce version currently available,
	 * including the version, label, and a link to each version's root.
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/resources_versions.htm
	 * «You do not need authentication to retrieve the list of versions.»
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/dome_versions.htm
	 */
	function t01_versions():void {print_r(df_json_encode(F::s()->versions()));}

	/** 2017-07-09 */
	function t02_the_latest_version():void {print_r(df_json_prettify(df_contents(self::url(
		df_last(df_http_json(self::url('services/data')))['url']
	))));}

	/** 2017-07-09 */
	function t03_invalid():void {print_r(df_json_encode(F::s()->invalid()));}

	/**
	 * 2017-07-09
	 */
	private static function url(string $s):string {return sprintf('https://%s/%s.json', G::s()->domain(), df_trim_ds_left($s));}
}