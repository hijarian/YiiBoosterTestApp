<?php
/**
 * Default demo of Select2 widget.
 *
 * @var InputWidgetsTestModel $model
 * @var Select2Controller $this
 * @var array $data
 * @var array $options
*/

$widgetConfig = array(
	'model' => $model,
	'attribute' => 'dummyStringAttr',
	'data' => $data,
	'options' => $options
);

$this->widget('booster.widgets.TbSelect2', $widgetConfig);

