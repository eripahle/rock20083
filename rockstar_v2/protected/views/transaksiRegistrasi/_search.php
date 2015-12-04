<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_REGISTRASI'); ?>
		<?php echo $form->textField($model,'ID_REGISTRASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_LENGKAP'); ?>
		<?php echo $form->textField($model,'NAMA_LENGKAP',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEMPAT'); ?>
		<?php echo $form->textField($model,'TEMPAT',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TANGGAL'); ?>
		<?php echo $form->textField($model,'TANGGAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NEGARA'); ?>
		<?php echo $form->textField($model,'NEGARA',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PROVINSI'); ?>
		<?php echo $form->textField($model,'PROVINSI',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KOTA'); ?>
		<?php echo $form->textField($model,'KOTA',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textArea($model,'ALAMAT',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODE_POS'); ?>
		<?php echo $form->textField($model,'KODE_POS',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_TELP'); ?>
		<?php echo $form->textField($model,'NO_TELP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TWITTER'); ?>
		<?php echo $form->textField($model,'TWITTER',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_IBU'); ?>
		<?php echo $form->textField($model,'NAMA_IBU',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_AYAH'); ?>
		<?php echo $form->textField($model,'NAMA_AYAH',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_SAKTI'); ?>
		<?php echo $form->textField($model,'NO_SAKTI',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORP'); ?>
		<?php echo $form->textField($model,'CORP',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_REKONSILIASI'); ?>
		<?php echo $form->textField($model,'STATUS_REKONSILIASI',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_RELEASE'); ?>
		<?php echo $form->textField($model,'STATUS_RELEASE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->