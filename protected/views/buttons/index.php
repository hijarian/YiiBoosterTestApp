<?php
$this->header('Buttons');

$this->separator();
$this->subheader('By sizes:');

$this->button(array(
	'label' => 'Large',
	'size' => 'large'
));

$this->button( array(
	'label' => 'Default',
	'size' => null 
));

$this->button(array(
	'label' => 'Small',
	'size' => 'small'
));

$this->button(array(
	'label' => 'Mini',
	'size' => 'mini'
));


$this->separator();
$this->subheader('By types:');

$this->button(array(
	'label' => 'Default',
	'type' => null
));

$this->button(array(
	'label' => 'Link',
	'type' => 'link'
));

$this->button(array(
	'label' => 'Primary',
	'type' => 'primary'
));

$this->button(array(
	'label' => 'Info',
	'type' => 'info'
));

$this->button(array(
	'label' => 'Success',
	'type' => 'success'
));

$this->button(array(
	'label' => 'Warning',
	'type' => 'warning'
));

$this->button(array(
	'label' => 'Danger',
	'type' => 'danger'
));

$this->button(array(
	'label' => 'Inverse',
	'type' => 'inverse'
));

$this->separator();

$this->subheader('Iconized buttons');

$this->button(array(
	'label' => 'icon-star',
	'icon' => 'star',
));

$this->button(array(
	'label' => 'icon-signal',
	'icon' => 'signal',
));

$this->separator();
	

