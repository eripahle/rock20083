<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-pribadi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_GALLERY'); ?>
		<?php echo $form->textField($model,'ID_GALLERY',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ID_GALLERY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_FANBASE'); ?>
		<?php echo $form->textField($model,'ID_FANBASE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ID_FANBASE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_USER'); ?>
		<?php echo $form->textField($model,'ID_USER'); ?>
		<?php echo $form->error($model,'ID_USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GAMBAR_GALLERY'); ?>
		<?php echo $form->textArea($model,'GAMBAR_GALLERY',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'GAMBAR_GALLERY'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->