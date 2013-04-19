<?php
/**
 * Testbed for demonstration of `TbSelect2` widget.
 *
 * Please note that silly name Select2 is from the project http://ivaynberg.github.com/select2/
*/
class Select2Controller extends CController
{
	public function actionIndex()
	{
		$this->renderDataWithOptions(
			array(
			     '1' => 'Option 1',
			     '2' => 'Option 2'
			),
			array('')
		);
	}

	public function actionInForm()
	{
		$model = new InputWidgetsTestModel();
		$this->render('form', compact('model'));
	}

	/**
	 * @param array $data Contents of "data" property for TbSelect2 widget
	 * @param array $options Contents of "options" property for TbSelect2 widget
	 */
	private function renderDataWithOptions($data, $options)
	{
		$model = new InputWidgetsTestModel();
		$this->render('index', compact('model', 'data', 'options'));
	}

}
