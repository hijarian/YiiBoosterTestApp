<?php
/* @var $this Controller */

if (isset($this->breadcrumbs))
{
	$this->widget(
		'zii.widgets.CBreadcrumbs',
		array(
			'links' => $this->breadcrumbs,
			'htmlOptions' => array(
				'class' => 'breadcrumb',
			)
		)
	);
}
