<?php

class RegistrasiController extends Controller
{
	public function actions() { 
		return array( 'captcha'=>array( 
			'class'=>'CCaptchaAction', 
			'backColor'=>0xFFFFFF, 
			), 
		); 
	}

	public function actionIndex()
	{
		$model=new TransaksiRegistrasi;
		$model_user=new Users;
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
				$mail->MsgHTML('<h1> Hello, '.$model->NAMA_LENGKAP.'</h1><br> Virtual ID anda : <b>'.$model->VAD.'</b>');
				// $mail->Body    = '';
				// $mail->AltBody = 'This is a plain-text message body';
				//Attach an image file
				//$mail->addAttachment('images/phpmailer_mini.png');
				//send the message, check for errors

				// if (!$mail->send()) {
				// 	$res = "Email Gagal Dikirim";
				// }else {
				// 	$res = "Email Sudah Dikirm";
				// }
				$res ='kirim email di matikan';

				
				Yii::app()->user->setFlash('Virtual ID',$model->VAD);
				Yii::app()->user->setFlash('Email',$model->EMAIL);
				Yii::app()->user->setFlash('Status',$res);
				// $data = array('vad'=>$model->VAD,'pwd'=>$model_user->PASSWORD,'email'=>$model->EMAIL);
				$this->redirect(array('confirm'));
			}
		}


		$this->render('create',array('model'=>$model,'model_user'=>$model_user));
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