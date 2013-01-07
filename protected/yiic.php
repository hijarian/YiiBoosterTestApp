<?php
/**
 * Entry point for the console application.
 * You better do not touch anything here.
 * Everything you need is in files referenced here
 *
 * Basically the only file you probably want to remove from here is 'debugmodeon'
 * However, as this particular application is about debugging one particular
 *  Yii extension this decision will probably be not very clever.
 *
 * This particular entry point is touched when you launch the ./yiic tool described in the Yii tutorials
 * It is used here mostly for creating migrations.
 */
define('DS', DIRECTORY_SEPARATOR);

require(__DIR__.DS.'..'.DS.'paths');
require(__DIR__.DS.'..'.DS.'debugmodeon');

$yiic   = YII_PATH.DS.'yiic.php';
$config = dirname(__FILE__).DS.'config'.DS.'console.php';

// This file will set up everything well for the console application.
require_once($yiic);
