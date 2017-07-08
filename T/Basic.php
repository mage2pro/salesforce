<?php
namespace Dfe\Salesforce\T;
// 2017-07-08
final class Basic extends TestCase {
	/** @test 2017-07-08 */
	function t00() {}

	/** 2017-07-08 */
	function t01_services() {echo df_json_prettify(file_get_contents(
		'https://mage2pro-dev-ed.my.salesforce.com/services/data.json'
	));}

	/** @test 2017-07-08 */
	function t01_services2() {echo df_json_prettify(file_get_contents(
		'https://mage2pro-dev-ed.lightning.force.com/services/data.json'
	));}
}