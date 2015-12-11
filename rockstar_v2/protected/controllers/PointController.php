<?php

class PointController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionTopUp()
	{
		$id = Yii::app()->user->getId();
		$model=new TransaksiRequestTopupPoint;
		$user=Users::model()->findByPk($id);

		if(isset($_POST['TransaksiRequestTopupPoint'])){
			
			$model->attributes=$_POST['TransaksiRequestTopupPoint'];
			$model->ID_USERS = $id;
			$model->TANGGAL = date('Y-m-d');
			$model->STATUS = 0;
			$model->save();

			Yii::app()->user->setFlash('Virtual Account',$user->VAS);
			Yii::app()->user->setFlash('Point',$model->POINT);
			Yii::app()->user->setFlash('Biaya',$model->POINT*1000);
				// $data = array('vad'=>$model->VAD,'pwd'=>$model_user->PASSWORD,'email'=>$model->EMAIL);
			$this->redirect(array('confirmtopup'));
		}
		$this->render('topup',array('model'=>$model));
	}
	public function actionConfirmTopUp(){
		if (Yii::app()->user->hasFlash('Virtual Account'))	
			$this->render('confirm');
		else
			$this->redirect(array('point/topup'));
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