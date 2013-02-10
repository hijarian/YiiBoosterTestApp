<?php
/**
 * Sandbox for the TbHtml5Editor widget.
 */
class Html5EditorController extends Controller
{
	/**
	 * @var string Caption on top of the test page.
	 */
	private $header;

	/**
	 * @var string Message which will be printed on the test page.
	 */
	private $description;

	/**
	 * @var array Configuration which will be passed to the widget being tested.
	 */
	private $widgetConfig;

	public function actionIndex()
	{
		$this->header = 'Default';
		$this->description = 'Note that the default editor does not have a text color selector.';
		$this->widgetConfig = array();

		$this->renderCurrentSettings();
	}

	public function actionWithColorsEnabled()
	{
		$this->header = 'Color selector enabled';
		$this->description = 'In the iframe of an editor there should be an additional CSS included with default color settings.';
		$this->widgetConfig = array('options' => array('color' => true));

		$this->renderCurrentSettings();
	}

	public function actionCustomCss()
	{
		$this->header = 'Colors enabled and custom stylesheets included';
		$this->description = 'In the iframe of an editor there should be three additional CSS included:'
			. ' one with default color settings, and two nonexistent (they are there only to provide a references).';
		$this->widgetConfig = array(
			'options' => array(
				'color' => true,
				'stylesheets' => array(
					'/assets/nonexistent.css', '/assets/another_404.css'
				)
			)
		);

		$this->renderCurrentSettings();
	}

	private function renderCurrentSettings()
	{
		$this->render(
			'index',
			array(
			     'header' => $this->header,
			     'description' => $this->description,
			     'model' => new InputWidgetsTestModel(),
			     'widgetConfig' => $this->widgetConfig,
			)
		);
	}

}
