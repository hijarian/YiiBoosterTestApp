<?php
/**
 * Sandbox for the TbHtml5Editor widget.
*/
class Html5EditorController extends Controller
{
	/**
	 * @var InputWidgetsTestModel
	 */
	private $model;

	public function init()
	{
		$this->model = new InputWidgetsTestModel();
	}

	public function actionIndex()
	{
		$this->render('index', array('model' => $this->model));
	}

	public function actionNoColors()
	{
		$this->render('index', array('model' => $this->model, 'disableColors' => true));
	}

}
