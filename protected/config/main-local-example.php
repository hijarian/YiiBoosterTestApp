<?php
/**
 * Local overrides for the application.
 * Copy this file in same directory with the name `main-local.php`
 *  and replace the tokens with real data.
 */
return array(
	'modules' => array(
		'gii' => array(
			'password' => 'GII_PASSWORD',
		)
	),
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=DB_HOST;dbname=DB_NAME',
			'username' => 'DB_USERNAME',
			'password' => 'DB_PASSWORD',
		),
	),

);