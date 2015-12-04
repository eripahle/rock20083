<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_GALLERY'); ?>
		<?php echo $form->textField($model,'ID_GALLERY',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_FANBASE'); ?>
		<?php echo $form->textField($model,'ID_FANBASE',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_USER'); ?>
		<?php echo $form->textField($model,'ID_USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GAMBAR_GALLERY'); ?>
		<?php echo $form->textArea($model,'GAMBAR_GALLERY',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->