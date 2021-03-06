<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
	array(
		"base_url" => "http://www.family2family.byethost33.com/php/hybridauth/",

		"providers" => array (
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array (
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ),
			),

			"AOL"  => array (
				"enabled" => false
			),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "187823826585-c56m828vcjsci4hf2otbalfgeo7ubtue.apps.googleusercontent.com", "secret" => "_wghoI0HlsfByR0v5I_izP-k" ),
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "1419150145041906", "secret" => "4e16d47d227e272303b4b06b0f12fdd5" ),
				"trustForwarded" => false
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "axpp57ITxb1qUVlNgMvXiUVhk", "secret" => "7oPFr3PFTUJ51AjxoPfceIguN4Be8078LBFpmU94Vuplc7ExuW" )
			),

			// windows live
			"Live" => array (
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"Foursquare" => array (
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" )
			),
		),

		// If you want to enable logging, set 'debug_mode' to true.
		// You can also set it to
		// - "error" To log only error messages. Useful in production
		// - "info" To log info and error messages (ignore debug messages)
		"debug_mode" => true,

		// Path to file writable by the web server. Required if 'debug_mode' is not false
		"debug_file" => "./auth.log",
	);
