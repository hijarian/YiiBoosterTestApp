<?php
/**
 * @var Html5EditorController $this
 *
 * @var InputWidgetsTestModel $model
 * @var bool $disableColors
 * @var bool $disableDefaultStylesheet
 *
 */

// We have to use the full-blown TbActiveForm just to test a single TbHtml5Editor widget, right.
$form = $this->beginWidget(
	'bootstrap.widgets.TbActiveForm',
	array(
		'id' => 'Html5Editor-wrapper',
		'type' => 'vertical',
	));

echo $form->html5EditorRow(
	$model,
	'dummyStringAttr',
	array(
		// ['htmlOptions']['options'] will be passed to TbHtml5Editor.editorOptions property.
		'options' => array(
			'color' => empty($disableColors) ? true : !$disableColors,
		)
	)
);

$this->endWidget();
