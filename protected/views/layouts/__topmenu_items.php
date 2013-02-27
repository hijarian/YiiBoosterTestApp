<?php
/**
 * This is a links for top menu.
 *
 * They should be in format acceptable by the `items` property of CMenu widget
 *  from Yii.
 */

return array(
	array(
		'label'=>'About', 
		'url' => array('/site/index')
	),
	array(
		'label'=>'Buttons', 
		'url' => '#', 
		'items' => array(
			array('label' => 'Normal Buttons', 'url' => array('/buttons/index')),
			array('label' => 'Button Groups', 'url' => array('/buttons/groups')),
			array('label' => 'Button Dropdowns', 'url' => array('/buttons/dropdowns')),
		), 
		'itemOptions' => array('class' => 'dropdown'), 
		'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'), 
		'submenuOptions' => array('class' => 'dropdown-menu')
	),
	array(
		'label' => 'JsonGridView',
		'url' => array('/jsonGrid/admin')
	),
	array(
		'label' => 'Html5Editor',
		'url' => '#',
		'items' => array(
			array('label' => 'Default settings', 'url' => array('/html5Editor/index')),
			array('label' => 'With colors', 'url' => array('/html5Editor/withColorsEnabled')),
			array('label' => 'With colors and custom CSS', 'url' => array('/html5Editor/customCss')),
		),
		'itemOptions' => array('class' => 'dropdown'),
		'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
		'submenuOptions' => array('class' => 'dropdown-menu')
	),
	array(
		'label' => 'Alert',
		'url' => '#',
		'items' => array(
			array('label' => 'Default settings', 'url' => array('/alert/index')),
			array('label' => 'No close button', 'url' => array('/alert/noCloseButton')),
			array('label' => 'Custom close button text', 'url' => array('/alert/customCloseButtonText')),
			array('label' => 'No close button for specific message type', 'url' => array('/alert/noCloseButtonOnSuccessMessage')),
			array('label' => 'Custom close button text for specific message type', 'url' => array('/alert/customCloseButtonTextOnSuccessMessage')),
		),
		'itemOptions' => array('class' => 'dropdown'),
		'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
		'submenuOptions' => array('class' => 'dropdown-menu')
	)

);