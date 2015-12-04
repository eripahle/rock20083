<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_USER'); ?>
		<?php echo $form->textField($model,'ID_USER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_REGISTRASI'); ?>
		<?php echo $form->textField($model,'ID_REGISTRASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_JENIS'); ?>
		<?php echo $form->textField($model,'ID_JENIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMER_SAKTI'); ?>
		<?php echo $form->textField($model,'NOMER_SAKTI',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VAS'); ?>
		<?php echo $form->textField($model,'VAS',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->