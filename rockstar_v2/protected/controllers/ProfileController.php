<?php

class ProfileController extends Controller
{
	public function actionIndex()
	{
		$id = Yii::app()->user->getId();
		if(empty($id)){
			$this->redirect(Yii::app()->user->returnUrl.'site/login');
		}
		$criteria = new CDbCriteria();
		$criteria->condition = 'ID_USERS = '.$id;
		$criteria->order = 'ID_GALLERY_PRIBADI DESC';
		$gallery = GalleryPribadi::model()->findAll($criteria);

		$gallery_barang = GalleryBarang::model()->get_data_barang($id);
		// $criteria2 = new CDbCriteria();
		// $criteria->condition = 'ID_USERS = '.$id;
		// $criteria->order = 'ID_GALLERY_BARANG DESC';
		// $gallery = GalleryBarang::model()->findAll($criteria);

		$profile = TransaksiRegistrasi::model()->get_data_profile($id);

		// print_r($profile); die();
		$this->render('profile',array('data'=>$profile,'gallery'=>$gallery,'koleksi'=>$gallery_barang));
	}
	public function actionData()
	{
		$id = Yii::app()->user->getId();
		if(empty($id)){
			$this->redirect(Yii::app()->user->returnUrl.'site/login');
		}
		if(!empty($_POST['id_reg'])){
			$criteria = new CDbCriteria();
			$profile = TransaksiRegistrasi::model()->get_data_profile($id);
			// echo $profile[0]['ID_REGISTRASI']; die();
			$model=TransaksiRegistrasi::model()->findByPk($id);
			if(isset($_POST['Users']))
			{
				$model->attributes=$_POST['Users'];
				if($model->save())
					$this->redirect(array('profile','id'=>$model->ID_REGISTRASI));
			}
			print_r($model); die();
			$this->render('update',array(
				'model'=>$model,
				));
		}

		$criteria = new CDbCriteria();
		$profile = TransaksiRegistrasi::model()->get_data_profile($id);
		// print_r($profile); die();
		$this->render('data_profile',array('data'=>$profile,));
	}
	public function actionChangePass()
	{
		$id = Yii::app()->user->getId();
		if(empty($id)){
			$this->redirect(Yii::app()->user->returnUrl.'site/login');
		}

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
	public function actionUpdate()
	{
		$id = Yii::app()->user->getId();
		if(empty($id)){
			$this->redirect(Yii::app()->user->returnUrl.'site/login');
		}
		$criteria = new CDbCriteria();
		$profile = TransaksiRegistrasi::model()->get_data_profile($id);
		$model=TransaksiRegistrasi::model()->findByPk($profile[0]['ID_REGISTRASI']);
		if(isset($_POST['TransaksiRegistrasi']))
		{
			$model->attributes=$_POST['TransaksiRegistrasi'];
			if($model->save())
				$this->redirect(array('profile/data'));
		}

		$this->render('update',array(
			'model'=>$model,
			));
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