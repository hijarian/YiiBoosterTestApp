<?php
/**
 * Default testbed for DateRangePicker
 *
 * @var DateRangePickerController $this
 *
 * @var InputWidgetsTestModel $model
*/

$this->header('Default settings');

echo CHtml::tag('p', array(), 'This is the demonstration of the TbDateRangePicker with only required options set (which are the "model" and "attribute" options).');

$this->widget(
	'booster.widgets.TbDateRangePicker',
	array(
	     'model' => $model,
	     'attribute' => 'dummyDateRangeAttr'
	)
);