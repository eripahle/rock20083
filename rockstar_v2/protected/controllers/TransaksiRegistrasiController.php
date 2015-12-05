<?php

class TransaksiRegistrasiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column1';

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
				'actions'=>array('index','view','confirm'),
				'users'=>array('*'),
				),
			array('allow', 
				'actions'=>array('update','view'), 
				'users'=>array('@'), 
				),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','profile'),
				'users'=>array('@'),
				),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
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
		$model_user=new Users;
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
			$cek= $model->validate();
			if($cek){
				// if($model->save()){
				$number='';
				for ($i=0; $i < 16 ; $i++) { 
					$number.=rand(0,9);
				}
				$model->ID_FANBASE = 1;
				// $model->NO_SAKTI = $number;
				$model->VAD = $this->randomNumber(16);
				$model->STATUS_REKONSILIASI = 0;
				$model->STATUS_RELEASE = 0;
				$tgl = explode('/',$_POST['TransaksiRegistrasi']['TANGGAL']);
				$model->TANGGAL=$tgl[2].'-'.$tgl[0].'-'.$tgl[1];
				$model->VALIDASI_UPLOAD = 0;
				// print_r($model); die();
				$model->save(false);

				$pass = $this->randomPassword(6);
				$model_user->PASSWORD= md5($pass);
				$model_user->ID_FANBASE = $model->ID_FANBASE;
				$model_user->ID_REGISTRASI= $model->ID_REGISTRASI;
				$model_user->ID_JENIS=4;
				$model_user->VAS='-';
				$model_user->STATUS=0;
				$model_user->save(false);

				Yii::import('application.extensions.phpmailer.JPhpMailer');
				$mail = new JPhpMailer;
				$mail->isSMTP();
				$mail->Debugoutput = 'html';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = 587;
				$mail->SMTPSecure = 'tls';
				$mail->SMTPAuth = true;
				$mail->Username = "arf.sendmailer@gmail.com";
				$mail->Password = "sendmailer";
				$mail->setFrom('arf.sendmailer@gmail.com', 'Admin Soniq');
				// $mail->addReplyTo('replyto@example.com', 'First Last');
				$mail->addAddress($model->EMAIL,$model->NAMA_LENGKAP);
				$mail->Subject = 'Konfirmasi Registrasi Soniq';
				$mail->MsgHTML('<h1> Hello, '.$model->NAMA_LENGKAP.'</h1><br> Virtual ID anda : <b>'.$model->VAD.'</b> <br> Password anda : <b>'.$pass.'</b>');
				// $mail->Body    = '';
				// $mail->AltBody = 'This is a plain-text message body';
				//Attach an image file
				//$mail->addAttachment('images/phpmailer_mini.png');
				//send the message, check for errors
				if (!$mail->send()) {
					$res = "Email Gagal Dikirim";
				}else {
					$res = "Email Sudah Dikirm";
				}

				// $from = 'arf.sendmailer@gmail.com';
				// $subject = "Konfirmasi Registrasi Soniq";
				// $message = "<h1> Hello, ".$model->NAMA_LENGKAP."</h1><br> Virtual ID anda : <b>".$model->VAD."</b> <br> Password anda : <b>".$pass."</b>";
				// $to = $model->EMAIL;

				// $mail=Yii::app()->Smtpmail;
				// $mail->SetFrom('$from', 'Admin Soniq');
				// $mail->Subject    = $subject;
				// $mail->MsgHTML($message);
				// $mail->AddAddress($to, "");
				// // $mail->Send();
				// if(!$mail->Send()) {
				// 	$res = "Email Gagal Dikirim";
				// }else {
				// 	$res = "Email Sudah Dikirm";
				// }
				Yii::app()->user->setFlash('Virtual ID',$model->VAD);
				Yii::app()->user->setFlash('Password',$pass);
				Yii::app()->user->setFlash('Email',$model->EMAIL);
				Yii::app()->user->setFlash('Status',$res);
				// $data = array('vad'=>$model->VAD,'pwd'=>$model_user->PASSWORD,'email'=>$model->EMAIL);
				$this->redirect(array('confirm'));
			}
		}

		$this->render('create',array(
			'model'=>$model,'model_user'=>$model_user,
			));
	}
	public function actionConfirm(){
		if (Yii::app()->user->hasFlash('Virtual ID'))	
			$this->render('confirm');
		else
			$this->redirect(array('site/login'));
	}
	function randomNumber($length) {
		$result = '';
		for($i = 0; $i < $length; $i++) {
			$result .= mt_rand(0, 9);
		}
		return $result;
	}
	function randomPassword($length) {
		$pass = '';
		$alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		for ($i = 0; $i < $length; $i++) {
			$n = mt_rand(0,strlen($alphabet)-1);
			$pass .= $alphabet[$n];
		}
		return $pass;
	}

	public function actionProfile()
	{
		$id = Yii::app()->user->getId();
		$criteria = new CDbCriteria();
		$profile = TransaksiRegistrasi::model()->get_data_profile($id);
		// print_r($profile); die();
		$this->render('profile',array('data'=>$profile,));
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
				$this->redirect(array('profile','id'=>$model->ID_REGISTRASI));
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
