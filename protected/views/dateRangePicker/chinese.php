<?php
/**
 * DateRangePicker set to Chinese explicitly.
 *
 * @var DateRangePickerController $this
 *
 * @var InputWidgetsTestModel $model
 */

$this->header('CJK names of months');

echo CHtml::tag('p', array(), 'This is the demonstration of the TbDateRangePicker set to custom month names using the explicit configuration option.');

$this->widget(
	'booster.widgets.TbDateRangePicker',
	array(
	     'model' => $model,
	     'attribute' => 'dummyDateRangeAttr',
	     'options' => array(
		     'locale' => array(
			     'monthNames' => array(
				     '1月',
				     '2月',
				     '3月',
				     '4月',
				     '5月',
				     '6月',
				     '7月',
				     '8月',
				     '9月',
				     '10月',
				     '11月',
				     '12月',
			     )
		     )
	     )
	)
);
