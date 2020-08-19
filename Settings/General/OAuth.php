<?php
namespace Dfe\Salesforce\Settings\General;
# 2017-07-10
/** @method static OAuth s() */
final class OAuth extends \Df\OAuth\Settings {
	/**
	 * 2017-07-10
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @used-by \Df\OAuth\Settings::refreshTokenSave()
	 * @return string
	 */
	protected function prefix() {return 'df_salesforce/general/oauth';}
}