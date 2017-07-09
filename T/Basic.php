<?php
namespace Dfe\Salesforce\T;
use Dfe\Salesforce\Settings\General as G;
// 2017-07-08
final class Basic extends TestCase {
	/** @test 2017-07-08 */
	function t00() {}

	/** @test 2017-07-08 */
	function t01_services() {echo df_json_prettify(file_get_contents(sprintf(
		'https://%s/services/data.json', G::s()->domain()
	)));}
}