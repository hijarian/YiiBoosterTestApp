<?php
/**
 * Main application config
 * As a user of app you probably do neither need nor want to change 
 *  anything in here.
 * 
 * All settings configured here can be overrided in your local config
 *  which should be called 'main-local.php' and placed alongside with this file.
 */

// It is expected that somewhere in the toplevel this constant is defined 
//  with full path to root directory of YiiBooster
Yii::setPathOfAlias('booster', YII_BOOSTER_PATH);

// Putting helper variables to explicit anonymous block to make them local
{
	$global_config = array(
		'name' => 'YiiBooster extension testing & showcase',

		'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

		'preload' => array('log', 'bootstrap'),

		'import' => array(
			'application.models.*',
			'application.components.*',
		),
	
		'modules' => array(
			'gii' => array(
				'class' => 'system.gii.GiiModule',
				'ipFilters'=>array('127.0.0.1','::1'),
				'generatorPaths' => array(
					'booster.gii'
				),
			),
		),

		'components' => array(

			'bootstrap' => array(
				'class' => 'booster.components.Bootstrap',
				'responsiveCss' => true,
			),

			'urlManager' => array(
				'urlFormat' => 'path',
				'showScriptName'=>false,
				'rules' => array(
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),

			'errorHandler' => array(
				'errorAction' => 'site/error',
			),

			'log' => array(
				'class' => 'CLogRouter',
				'routes' => array(
					array(
						'class'=>'CWebLogRoute',
						'levels' => 'error,warning'
					),
				),
			),

			'db' => array(
				'emulatePrepare' => true,
				'charset' => 'utf8',
			),

		),
	);

	$local_config = require(dirname(__FILE__).'/main-local.php');

	return CMap::mergeArray($global_config, $local_config);
}