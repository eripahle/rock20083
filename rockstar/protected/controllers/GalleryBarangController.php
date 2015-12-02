<?php

class GalleryBarangController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column2';

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

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
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
		$model=new GalleryBarang;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryBarang']))
		{
			
            $model->attributes=$_POST['GalleryBarang'];
 
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $uploadedFile=CUploadedFile::getInstance($model,'SAMPEL_GALLERY');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->SAMPEL_GALLERY = $fileName;

            $rnd = rand(0,9999);
            $uploadedFile2=CUploadedFile::getInstance($model,'GAMBAR_GALLERY');
            $fileName2 = "{$rnd}-{$uploadedFile2}";  // random number + file name
            $model->GAMBAR_GALLERY = $fileName2;
 			
			$model->ID_USERS = Yii::app()->user->getId();

            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/berita/'.$fileName);  // image will uplode to rootDirectory/banner/
              	$uploadedFile2->saveAs(Yii::app()->basePath.'/../images/berita/'.$fileName2);  // image will uplode to rootDirectory/banner/
              	$this->redirect(array('index'));
            }
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['GalleryBarang']))
		{
			$model->attributes=$_POST['GalleryBarang'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_GALLERY_BARANG));
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
		$model = GalleryBarang::model()->findByAttributes(array("ID_GALLERY_BARANG"=>$id));
		unlink(Yii::app()->basePath.'/../images/berita/'.$model->SAMPEL_GALLERY);
		unlink(Yii::app()->basePath.'/../images/berita/'.$model->GAMBAR_GALLERY);
		$this->loadModel($id)->delete();
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

		$criteria = new CDbCriteria();
		$dataProvider=new CActiveDataProvider('GalleryBarang');
		$id = Yii::app()->user->getId();
		// $criteria->condition = 'ID_USERS = '.$id;
		$criteria->order = 'ID_GALLERY_BARANG DESC';
		$gallery = GalleryBarang::model()->findAll($criteria);
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'gallery'=>$gallery,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new GalleryBarang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GalleryBarang']))
			$model->attributes=$_GET['GalleryBarang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GalleryBarang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GalleryBarang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GalleryBarang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallery-barang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
