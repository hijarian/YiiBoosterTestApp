<?php
/**
 * @var InputWidgetsTestModel $model
 * @var Select2Controller $this
*/

echo CHtml::tag('p', array(), 'Please note that the width stay fixed at all times for this widget. This is because if you did not set the "width" configuration parameter for Select2 widget explicitly, it defaults to "resolve". See the Select2 documentation for details.');
echo CHtml::tag('p', array(), 'See the issue #377 at GitHub for explanation why this test case exists.');

/** @var TbActiveForm $form  */
$form = $this->beginWidget( 'bootstrap.widgets.TbActiveForm');

echo $form->select2Row(
	$model,
	'dummyStringAttr',
	array(
		'asDropDownList' => true,
		'multiple' => 'multiple',
	    'data' => array('1', '2')
	)
);

$this->endWidget();