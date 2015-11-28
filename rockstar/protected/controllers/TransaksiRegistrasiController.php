<?php

class TransaksiRegistrasiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function actions() { 
		return array( 'captcha'=>array( 
			'class'=>'CCaptchaAction', 
			'backColor'=>0xFFFFFF, 
			), 
		); 
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow captcha library
				'actions'=>array('create','captcha'), 
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			 array('allow', 
			 	'actions'=>array('update','view'), 
			 	'users'=>array('@'), 
			 ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TransaksiRegistrasi;
		$model_user=new User;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model,$model_user);
		
		if(isset($_POST['TransaksiRegistrasi'])){
		// 	if($model->validate() && $model_user->validate()){
		// 	echo "oke";
		// }else{
		// 	echo "ga oke";
		// }
		// die();
			$model->attributes=$_POST['TransaksiRegistrasi'];
			$model_user->attributes=$_POST['User'];
			$cek= $model->validate();
			$cek= $model_user->validate() && $cek;
			if($cek){
				// if($model->save()){
				$number='';
				for ($i=0; $i < 16 ; $i++) { 
					$number.=rand(0,9);
				}
				$model->ID_FANBASE = 1;
				$model->NO_SAKTI = $number;
				$model->VAD = '-';
				$model->STATUS_REKONSILIASI = 'N';
				$model->STATUS_RELEASE = 'N';
				$tgl = explode('/',$_POST['TransaksiRegistrasi']['TANGGAL']);
				$model->TANGGAL=$tgl[2].'-'.$tgl[0].'-'.$tgl[1];
				$model->save(false);

				$model_user->PASSWORD = md5($_POST['User']['PASSWORD']);
				$model_user->ID_FANBASE = $model->ID_FANBASE;
				$model_user->ID_REGISTRASI= $model->ID_REGISTRASI;
				$model_user->ID_JENIS=3;
				$model_user->NOMER_SAKTI='-';
				$model_user->VAS='-';
				$model_user->STATUS='N';
				$model_user->save(false);

				$this->redirect(array('view','id'=>$model->ID_REGISTRASI));
			}
		}

		$this->render('create',array(
			'model'=>$model,'model_user'=>$model_user,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TransaksiRegistrasi']))
		{
			$model->attributes=$_POST['TransaksiRegistrasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_REGISTRASI));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TransaksiRegistrasi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TransaksiRegistrasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TransaksiRegistrasi']))
			$model->attributes=$_GET['TransaksiRegistrasi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TransaksiRegistrasi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TransaksiRegistrasi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TransaksiRegistrasi $model the model to be validated
	 */
	protected function performAjaxValidation($model,$model_user)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registrasi-form')
		{
			echo CActiveForm::validate($model);
			echo CActiveForm::validate($model_user);
			Yii::app()->end();
		}
	}
}
