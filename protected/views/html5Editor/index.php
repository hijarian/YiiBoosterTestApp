<?php
/**
 * @var Html5EditorController $this
 *
 * @var string $header
 * @var string $description
 * @var InputWidgetsTestModel $model
 * @var array $widgetConfig Options to be put as $htmlOptions parameter for `TbActiveForm.html5EditorRow` call.
 *
 */

echo CHtml::tag('h2', array(), $header);
echo Chtml::tag('p', array(), $description);

// We have to use the full-blown TbActiveForm just to test a single TbHtml5Editor widget, right.
$form = $this->beginWidget( 'bootstrap.widgets.TbActiveForm');

echo $form->html5EditorRow( $model, 'dummyStringAttr', $widgetConfig);

$this->endWidget();
