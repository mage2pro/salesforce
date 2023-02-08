<?php
namespace Dfe\Salesforce\API;
use Df\Core\Exception as DFE;
# 2017-07-09
final class Facade {
	/** 2017-07-09 An intentionally invalid request. I use it to implement the proper error handling. */
	function invalid() {return $this->p('invalid');}

	/**
	 * 2017-07-09
	 * «Lists summary information about each Salesforce version currently available,
	 * including the version, label, and a link to each version's root.
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/resources_versions.htm
	 * «You do not need authentication to retrieve the list of versions.»
	 * https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/dome_versions.htm
	 */
	function versions() {return $this->p('services/data');}

	/**
	 * 2017-07-09
	 * @param string $path
	 * @param array(string => mixed) $p [optional]
	 * @param string|null $method [optional]
	 * @return array(string => mixed)
	 * @throws DFE
	 */
	private function p($path, array $p = [], $method = null):array {return
		(new Client($path, $p, $method))->p()
	;}

	/**
	 * 2017-07-09
	 * @used-by \Dfe\Salesforce\Test\Basic::t01_versions()
	 * @used-by \Dfe\Salesforce\Test\Basic::t03_invalid()
	 */
	static function s():self {static $r; return $r ? $r : $r = new self;}
}