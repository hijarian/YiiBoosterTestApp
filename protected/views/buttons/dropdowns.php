<?php
/**
 * We just got the $demoItems variable from the controller and can use it in the dropdowns
 */

$this->header('Dropdowns');

$this->separator();

echo CHtml::openTag('div', array('class' => 'btn-group'));
$this->button(array(
	'label' => 'With button and additional markup',
	'items' => $demoItems
));
echo CHtml::closeTag('div');

$this->separator();

$this->buttonGroup(
	array(
		'buttons' => array(
			array(
				'label' => 'With TbButtonGroup widget',
				'items' => $demoItems
			)
		)
	)
);

$this->separator();

$this->buttonGroup(
	array(
		'buttons' => array(
			array(
				'label' => 'Split dropdown is essentially a button group with two buttons',
				'url' => '#',
			),
			array(
				'items' => $demoItems
			)
		)
	)
);

$this->separator();

$this->buttonGroup(
	array(
		'htmlOptions' => array(
			'class' => 'dropup'
		),
		'buttons' => array(
			array(
				'label' => 'Dropup is possible, too, with corresponding CSS class',
				'url' => '#',
				'items' => $demoItems
			)
		)
	)
);

$this->separator();

$this->buttonGroup(
	array(
		'htmlOptions' => array(
			'class' => 'dropup'
		),
		'buttons' => array(
			array(
				'label' => 'Same for split dropups',
				'url' => '#',
			),
			array(
				'items' => $demoItems
			)
		)
	)
);

$this->separator();

$this->buttonGroup(
	array(
		'type' => 'danger',
		'buttons' => array(
			array(
				'label' => 'You can put button types on dropdown, too',
				'items' => $demoItems
			)
		)
	)
);

$this->separator();

$this->buttonGroup(
	array(
		'buttons' => array(
			array(
				'label' => 'You can put button types on parts of dropdown, too',
				'url' => '#',
				'type' => 'info',
			),
			array(
				'type' => 'warning',
				'items' => array(
					array('label' => 'Types on subitems have no effect, though'),
					array('label' => 'info nolink', 'type' => 'info'),
					array('label' => 'danger link', 'type' => 'danger', 'url' => '#'),
				)
			),
		)
	)
);

