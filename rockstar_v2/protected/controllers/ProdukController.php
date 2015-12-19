<?php

class ProdukController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionBuyFree($id){

		$cek = $this->setDataBuy('-',$id,1,'FREE');
		if($cek){
			$this->redirect(array('./profile'));
		}

	}
	public function actionBuybypoint($id)
	{
		$vad = '-';
		$cek = $this->setDataBuy($vad,$id,1,'POINT');
		if($cek){
			$this->redirect(array('./profile'));
		}else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Point Anda Tidak Cukup')
				window.location.href='../../GalleryBarang';
			</SCRIPT>");
		}	
	}
	public function actionBuybycash($id)
	{
		$vad = $this->randomNumber(16);
		$cek = $this->setDataBuy($vad,$id,0,'CASH');
		if($cek){
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Silahkan Cek Email Anda. Terimakasih')
				window.location.href='../../GalleryBarang';
			</SCRIPT>");
		}
	}
	function setDataBuy($vad,$id,$status,$type){
		$model_produk=new TransaksiRequestPembelian;
		$idUsr = Yii::app()->user->getId();
		$profile = TransaksiRegistrasi::model()->get_data_profile($idUsr);
		$profile = (object)$profile;
		$user=Users::model()->findByPk($idUsr);
		$model=GalleryBarang::model()->findByPk($id);
		if($type == 'POINT' && $user->POINT < $model->HARGA_POINT){
			return false;
		}else{			
			$model_produk->ID_USERS = $idUsr;
			$model_produk->ID_GALLERY_BARANG= $id;
			$model_produk->VAD = $vad;
			$model_produk->STATUS=$status;
			$model_produk->TYPE_PEMBELIAN = $type;
			$model_produk->save(false);
			if($type=='CASH'){
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
				$mail->Subject = 'Konfirmasi Pembelian Produk Soniq';
				$mail->MsgHTML('<h1> Hello, '.$profile->NAMA_LENGKAP.'</h1><br> 
					Anda Request Barang denganKODE BARANG : <b>'.$model->KODE_GALLERY.' </b> dan 
					 NAMA BARANG : <b>'.$model->NAMA_GALLERY.'</b><br> Silahkan Transfer Biaya Pembelian Sebesar	: <b>'.$model->HARGA_CASH.'</b> Ke Rekening Berikut<br> 
					<br> Virtual ID anda : <b>'.$model_produk->VAD.'</b> <br> Terimakasih... ');
				$mail->send();
			}else if($type=='POINT'){
				$user->POINT = $user->POINT - $model->HARGA_POINT;
				$user->save();
			}
			return true;
		}
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