<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_USER'); ?>
		<?php echo $form->textField($model,'ID_USER'); ?>
		<?php echo $form->error($model,'ID_USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_REGISTRASI'); ?>
		<?php echo $form->textField($model,'ID_REGISTRASI'); ?>
		<?php echo $form->error($model,'ID_REGISTRASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_JENIS'); ?>
		<?php echo $form->textField($model,'ID_JENIS'); ?>
		<?php echo $form->error($model,'ID_JENIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMER_SAKTI'); ?>
		<?php echo $form->textField($model,'NOMER_SAKTI',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'NOMER_SAKTI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VAS'); ?>
		<?php echo $form->textField($model,'VAS',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'VAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->