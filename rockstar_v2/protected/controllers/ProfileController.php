<?php

class ProfileController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionChangePass()
	{
		$id = Yii::app()->user->getId();
		$model_user=$this->loadModel($id);
		$model_user->setScenario('changePwd');

		if(isset($_POST['Users'])){
			$model_user->attributes=$_POST['Users'];
			// validate user input and redirect to the previous page if valid
			$model_user->PASSWORD =  md5($model_user->new_password);
			if($model_user->STATUS_FIRST_LOGIN == 0){
				$model_user->STATUS_FIRST_LOGIN = 1;
				$model_user->POINT = 10;
			}
			if($model_user->save()){
				$this->redirect(Yii::app()->user->returnUrl.'timeline');
			}
			
		}
		$this->render('changepass',array('model'=>$model_user));
	}
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}