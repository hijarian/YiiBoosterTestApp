<?php
/**
 * Core controller for the whole application.
 * It shows the views with the widgets in them via the "page" action.
 */
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}

	/**
	 * Homepage.
	 */
	public function actionIndex()
	{
		$this->pageTitle = Yii::app()->name;
		$this->render('index');
	}

	/**
	 * Error page.
	 */
	public function actionError()
	{
		if ($error=Yii::app()->errorHandler->error)
		{
			if (Yii::app()->request->isAjaxRequest)
			{
				echo $error['message'];
			}
			else
			{
				$this->render('error', $error);
			}
		}
	}
}