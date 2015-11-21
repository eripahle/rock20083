<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'transaksi-registrasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		)); ?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'NAMA_LENGKAP'); ?>
			<?php echo $form->textField($model,'NAMA_LENGKAP',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'NAMA_LENGKAP'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'TEMPAT'); ?>
			<?php echo $form->textField($model,'TEMPAT',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'TEMPAT'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'TANGGAL'); ?>
			<?php echo $form->textField($model,'TANGGAL'); ?>
			<?php echo $form->error($model,'TANGGAL'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'NEGARA'); ?>
			<?php echo $form->textField($model,'NEGARA',array('size'=>40,'maxlength'=>40)); ?>
			<?php echo $form->error($model,'NEGARA'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'PROVINSI'); ?>
			<?php echo $form->textField($model,'PROVINSI',array('size'=>40,'maxlength'=>40)); ?>
			<?php echo $form->error($model,'PROVINSI'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'KOTA'); ?>
			<?php echo $form->textField($model,'KOTA',array('size'=>40,'maxlength'=>40)); ?>
			<?php echo $form->error($model,'KOTA'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'ALAMAT'); ?>
			<?php echo $form->textArea($model,'ALAMAT',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'ALAMAT'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'KODE_POS'); ?>
			<?php echo $form->textField($model,'KODE_POS',array('size'=>5,'maxlength'=>5)); ?>
			<?php echo $form->error($model,'KODE_POS'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'NO_TELP'); ?>
			<?php echo $form->textField($model,'NO_TELP',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'NO_TELP'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'EMAIL'); ?>
			<?php echo $form->textField($model,'EMAIL',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'EMAIL'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'TWITTER'); ?>
			<?php echo $form->textField($model,'TWITTER',array('size'=>30,'maxlength'=>30)); ?>
			<input type="text" name="TWITTER">
			<?php echo $form->error($model,'TWITTER'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'NAMA_IBU'); ?>
			<?php echo $form->textField($model,'NAMA_IBU',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'NAMA_IBU'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'NAMA_AYAH'); ?>
			<?php echo $form->textField($model,'NAMA_AYAH',array('size'=>30,'maxlength'=>30)); ?>
			<?php echo $form->error($model,'NAMA_AYAH'); ?>
		</div>

		

	<!-- 	<div class="row">
			<?php echo $form->labelEx($model,'NO_SAKTI'); ?>
			<?php echo $form->textField($model,'NO_SAKTI',array('size'=>16,'maxlength'=>16)); ?>
			<?php echo $form->error($model,'NO_SAKTI'); ?>
		</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'CORP'); ?>
		<?php echo $form->textField($model,'CORP',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CORP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VID'); ?>
		<?php echo $form->textField($model,'VID',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'VID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_REKONSILIASI'); ?>
		<?php echo $form->textField($model,'STATUS_REKONSILIASI',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_REKONSILIASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_RELEASE'); ?>
		<?php echo $form->textField($model,'STATUS_RELEASE',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS_RELEASE'); ?>
	</div> -->
	<?php if (extension_loaded('gd')): ?> 
		<div class="row"> 
			<?php echo CHtml::activeLabelEx($model, 'verifyCode') ?> 
			<div> 
				<?php $this->widget('CCaptcha'); ?><br/> 
				<?php echo CHtml::activeTextField($model,'verifyCode'); ?> 
			</div> 
			<div class="hint">
				Ketik tulisan yang ada pada gambar . <br/>Tulisan tidak case sensitive
			</div> 
		</div> 
	<?php endif; ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->