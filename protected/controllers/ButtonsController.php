<?php
/**
 * Here we'll show the button widgets.
 * 
 */
class ButtonsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionGroups()
	{
		$this->render('groups');
	}

	public function actionDropdowns()
	{
		$this->render('dropdowns', array('demoItems' => $this->makeDemoDropdownItems()));
	}

	protected function button($options)
	{
		$this->widget('booster.widgets.TbButton', $options);
	}	

	protected function buttonGroup($options)
	{
		$this->widget('booster.widgets.TbButtonGroup', $options);
	}	

	protected function subheader($text)
	{
		echo CHtml::tag('h2', array(), $text);
	}

	private function makeDemoDropdownItems()
	{
		return array(
			array(
				'label' => 'No URL means header item'
			),
			array(
				'label' => 'Some action',
				'url' => '#'
			),
			'---',
			array(
				'label' => 'Submenu expander',
				'url' => '#',
				'items' => array(
					array(
						'label' => 'Further levels possible, too', 
						'url' => '#',
						'items' => array(
							array('label' => 'For example, third level here'),
							array('label' => 'Lorem', 'url' => '#'),
							array('label' => 'Ipsum', 'url' => '#')
						)
					)
				)
			)
		);
	}
}