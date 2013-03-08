<?php
/**
 * Testbed for TbDateRangePicker widget.
*/
class DateRangePickerController extends Controller
{
	public function actionIndex()
	{
		$model = $this->makeModel();
		$this->render('index', compact('model'));
	}

	public function actionChinese()
	{
		$model = $this->makeModel();
		$this->render('chinese', compact('model'));
	}

	public function actionLanguage($set = 'en')
	{
		Yii::app()->language = $set;
		$model = $this->makeModel();
		$this->render('autoGuessLanguage', compact('model'));
	}

	private function makeModel()
	{
		return new InputWidgetsTestModel();
	}
}
