<?php
/**
 * Here is the TbDateRangePicker which has only the minimum config set but the application language was changed
 * so it should automatically guess month names.
 *
 * @var DateRangePickerController $this
 *
 * @var InputWidgetsTestModel $model
*/

$this->header('Auto-guessing month and week day names');

echo CHtml::tag('p', array(), 'If the month and week day names was not set explicitly, widget will use the current Yii locale settings to get them, so you can control this labels just by using `Yii::app()->setLanguage()` call.');

$this->widget(
	'booster.widgets.TbDateRangePicker',
	array(
	     'model' => $model,
	     'attribute' => 'dummyDateRangeAttr'
	)
);