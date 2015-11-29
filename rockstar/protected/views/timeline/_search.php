<?php
/* @var $this TimelineController */
/* @var $model Status */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_STATUS'); ?>
		<?php echo $form->textField($model,'ID_STATUS',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'DATETIME_STATUS'); ?>
		<?php echo $form->textField($model,'DATETIME_STATUS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KONTEN'); ?>
		<?php echo $form->textArea($model,'KONTEN',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->