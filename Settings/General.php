<?php
namespace Dfe\Salesforce\Settings;
# 2017-07-09
/** @method static General s() */
final class General extends \Df\Config\Settings {
	/**
	 * 2017-07-09 «Your Salesforce domain»
	 */
	function domain():string {return $this->v();}

	/**
	 * 2017-07-09
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	final protected function prefix():string {return 'df_salesforce/general';}
}