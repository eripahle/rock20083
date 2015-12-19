<?php

class PointController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionTopUp()
	{
		// if(isset($_POST['TransaksiRequestTopupPoint'])){
		// 	echo "ss"; die();
		// 	$model->attributes=$_POST['TransaksiRequestTopupPoint'];
		// 	$model->ID_USERS = $id;
		// 	$model->TANGGAL = date('Y-m-d');
		// 	$model->STATUS = 0;
		// 	$model->save();

		// 	Yii::app()->user->setFlash('Virtual Account',$user->VAS);
		// 	Yii::app()->user->setFlash('Point',$model->POINT);
		// 	Yii::app()->user->setFlash('Biaya',$model->POINT*1000);
		// 		// $data = array('vad'=>$model->VAD,'pwd'=>$model_user->PASSWORD,'email'=>$model->EMAIL);
		// 	$this->redirect(array('confirmtopup'));
		// }
		$id = Yii::app()->user->getId();
		$topup=TransaksiRequestTopupPoint::model()->get_data_topup($id);
		$topup = (object)$topup;	
		$this->render('topup',array('topup'=>$topup));
	}
	public function actionConfirmTopUp(){
		$id = Yii::app()->user->getId();
		$model=new TransaksiRequestTopupPoint;
		$user=Users::model()->findByPk($id);
		$model->ID_USERS = $id;
		$model->TANGGAL = date('Y-m-d');
		$model->STATUS = 0;
		$model->save();

		$profile = TransaksiRegistrasi::model()->get_data_profile($id);
		$profile = (object)$profile;
		Yii::app()->user->setFlash('Virtual Account',$user->VAS);
		Yii::app()->user->setFlash('Email',$profile->EMAIL);
		if (Yii::app()->user->hasFlash('Virtual Account')){
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
		$mail->addAddress($profile->EMAIL,$profile->NAMA_LENGKAP);
		$mail->Subject = 'Konfirmasi TopUP Point Soniq';
		$mail->MsgHTML('<h1> Hello, '.$profile->NAMA_LENGKAP.'</h1><br>
			Silahkan Transfer Biaya ke Virtual Account Anda <b>'.$user->VAS.'</b><br>
			Nilai Point adalah biaya / 5000 <br>
			<br> Terimakasih');
		$mail->send();	
		$this->render('confirm');
		}else{
			$this->redirect(array('point/topup'));
		}
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