<?php

class ProdukController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionBuyByPoint($idProduk)
	{
		$model_user=new Users;
		$model_produk=new TransaksiRequestPembelian;
		$idUsr = Yii::app()->user->getId();
		
		$this->render('index');
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