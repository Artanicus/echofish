<?php

class DefaultController extends Controller
{
  public $layout = '//layouts/column1';
  public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array (
				array (
						'allow', // allow authenticated user
						'expression'=>"Yii::app()->user->isAdmin",
				),
				array (
						'deny', // deny all users
						'users' => array (
								'*'
						)
				)
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionHelp($section=null)
	{
	  $this->render('help',array('section'=>$section));
	}
}