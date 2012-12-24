<?php
/**
 * This is a links for top menu.
 *
 * They should be in format acceptable by the `items` property of CMenu widget
 *  from Yii.
 */

return array(
	array('label'=>'About', 'url' => array('/site/index')),
	array('label'=>'CSS classes', 'url' => array('/site/page', 'view'=>'css_classes')),
);