<?php
namespace Dfe\Salesforce;
# 2017-07-10
/** @final Unable to use the PHP «final» keyword here because of the M2 code generation. */
class Button extends \Df\OAuth\FE\Button {
	/**
	 * 2017-07-10
	 * @override
	 * @see \Df\OAuth\FE\Button::pExtra()
	 * @used-by \Df\OAuth\FE\Button::onFormInitialized()
	 * @return array(string => mixed)
	 */
	final protected function pExtra():array {return df_clean([
		# 2017-07-11
		# «Specifies a value to be returned in the response; this is useful for detecting "replay" attacks.
		# Optional with the openid scope for getting a user ID token.»
		# Optional.
		# https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_web_server_oauth_flow.htm#nonce_parameter_description
		'nonce' => null
		 # 2017-07-11
		 # Note 1.
		 # «Specifies what data your application can access.
		 # See `Scope Parameter Values` in the online help for more information.»
		 # Optional.
		 # https://developer.salesforce.com/docs/atlas.en-us.api_rest.meta/api_rest/intro_understanding_web_server_oauth_flow.htm#scope_parameter_description
		 # Note 2.
		 # The «Scope Parameter Values» documentation article
		 # is present only in the «Mobile SDK Development Guide»:
		 # https://www.google.com/search?q="Scope+Parameter+Values"+site:developer.salesforce.com
		 # https://developer.salesforce.com/docs/atlas.en-us.mobile_sdk.meta/mobile_sdk/oauth_scope_parameter_values.htm#topic-title
		,'scope' => null
	]);}
}

