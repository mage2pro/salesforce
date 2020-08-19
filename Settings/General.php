<?php
namespace Dfe\Salesforce\Settings;
# 2017-07-09
/** @method static General s() */
final class General extends \Df\Config\Settings {
	/**
	 * 2017-07-09 «Your Salesforce domain»
	 * @return string
	 */
	function domain() {return $this->v();}

	/**
	 * 2017-07-09
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	final protected function prefix() {return 'df_salesforce/general';}
}