<?php
/**
 * This config is in effect when you launch the console application.
 * Naturally, it differs from the config of web frontend.
 * However, most settings will be from there.
 */
{
	$main_config = require(dirname(__FILE__).DIRECTORY_SEPARATOR.'main.php');
	$console_overrides = array(
		'components'=>array(
			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					),
				),
			),
		),

		'commandMap' => array(
			'migrate' => array(
				// For overrides to be in effect, we need to provide the class name
				'class' => 'system.cli.commands.MigrateCommand',
				'templateFile' => 'application.migrations.template.template',
			),
		),
	);

	return CMap::mergeArray($main_config, $console_overrides);
}