<?php
/**
 * Testbed for TbAlert widget.
*/
class AlertController extends Controller
{
	public function actionIndex()
	{
		$this->setSuccessMessage();
		$this->render('index', array('config' => array()));
	}

	public function actionNoCloseButton()
	{
		$this->setSuccessMessage();
		$config = $this->getNoCloseButtonConfig();
		$this->render('index', array('config' => $config));
	}

	private function getNoCloseButtonConfig()
	{
		return array( 'closeText' => false );
	}

	public function actionEmptyCloseButtonText()
	{
		$this->setSuccessMessage();
		$config = $this->getEmptyCloseButtonTextConfig();
		$this->render('index', array('config' => $config));
	}

	private function getEmptyCloseButtonTextConfig()
	{
		return array( 'closeText' => '' );
	}

	public function actionNoCloseButtonOnSuccessMessage()
	{
		$this->setSuccessMessage();
		$config = $this->getNoCloseButtonOnSuccessMessageConfig();
		$this->render('index', array('config' => $config));
	}

	private function getNoCloseButtonOnSuccessMessageConfig()
	{
		return array('alerts' => array('success' => array('closeText' => false)));
	}

	public function actionCustomCloseButtonText()
	{
		$this->setSuccessMessage();
		$config = $this->getCustomCloseButtonTextConfig();
		$this->render('index', array('config' => $config));
	}

	private function getCustomCloseButtonTextConfig()
	{
		return array( 'closeText' => 'close' );
	}

	public function actionCustomCloseButtonTextOnSuccessMessage()
	{
		$this->setSuccessMessage();
		$config = $this->getCustomCloseButtonTextOnSuccessMessageConfig();
		$this->render('index', array('config' => $config));
	}

	private function getCustomCloseButtonTextOnSuccessMessageConfig()
	{
		return array('alerts' => array('success' => array('closeText' => 'close')));
	}

	private function setSuccessMessage()
	{
		Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
	}

}
