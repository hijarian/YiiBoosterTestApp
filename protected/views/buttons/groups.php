<?php

$this->header('Button Groups');

$this->separator();

$this->subheader('Arbitrary number of buttons');

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'1', 'url'=>'#'),
		array('label'=>'2', 'url'=>'#'),
		array('label'=>'3', 'url'=>'#'),
		array('label'=>'4', 'url'=>'#'),
	)
));

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'5', 'url'=>'#'),
		array('label'=>'6', 'url'=>'#'),
		array('label'=>'7', 'url'=>'#'),
	)
));

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'8', 'url'=>'#'),
	)
));

$this->separator();

$this->subheader('Vertical button groups');

$this->buttonGroup(array(
	'stacked' => true,
	'buttons' => array(
		array('label'=>'5', 'url'=>'#'),
		array('label'=>'6', 'url'=>'#'),
		array('label'=>'7', 'url'=>'#'),
	)
));

$this->separator();

$this->subheader('Button groups in a toolbar');

echo CHtml::openTag('div', array('class' => 'btn-toolbar'));
$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'1', 'url'=>'#'),
		array('label'=>'2', 'url'=>'#'),
		array('label'=>'3', 'url'=>'#'),
		array('label'=>'4', 'url'=>'#'),
	)
));

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'5', 'url'=>'#'),
		array('label'=>'6', 'url'=>'#'),
		array('label'=>'7', 'url'=>'#'),
	)
));

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'8', 'url'=>'#'),
	)
));
echo CHtml::closeTag('div');

$this->separator();

$this->subheader('Checkbox button groups');

$this->buttonGroup(array(
	'toggle' => 'checkbox',
	'buttons' => array(
		array('label'=>'Click me'),
		array('label'=>'Click me'),
		array('label'=>'Click me'),
	)
));


$this->separator();

$this->subheader('Radio button groups');

$this->buttonGroup(array(
	'toggle' => 'radio',
	'buttons' => array(
		array('label'=>'Click me'),
		array('label'=>'Click me'),
		array('label'=>'Click me'),
	)
));

$this->separator();

$this->subheader('Iconized button groups');

$this->buttonGroup(array(
	'toggle' => 'radio',
	'buttons' => array(
		array('label'=>'align-left', 'icon' => 'align-left'),
		array('label'=>'no icon here'),
		array('label'=>'circle-arrow-left', 'icon' => 'circle-arrow-left'),
	)
));

$this->separator();

$this->subheader('Types on individual buttons');

$this->buttonGroup(array(
	'buttons' => array(
		array('label'=>'1', 'url'=>'#', 'type' => 'info'),
		array('label'=>'2', 'url'=>'#', 'type' => 'primary'),
		array('label'=>'3', 'url'=>'#', 'type' => null),
		array('label'=>'4', 'url'=>'#', 'type' => 'danger'),
	)
));

