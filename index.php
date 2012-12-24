<?php
/**
 * Entry point for the application.
 * You better do not touch anything here.
 * Everything you need is in files referenced here
 *
 * Basically the only file you probably want to remove from here is 'debugmodeon'
 * However, as this particular application is about debugging one particular
 *  Yii extension this decision will probably be not very clever.
 */
define('DS', DIRECTORY_SEPARATOR);

require(__DIR__.DS.'paths');
require(__DIR__.DS.'debugmodeon');

require_once(YII_PATH.DS.'yii.php');

Yii::createWebApplication(
	dirname(__FILE__).'/protected/config/main.php'
)->run();
