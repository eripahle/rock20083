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
		'htmlOptions' => array(
        				'enctype' => 'multipart/form-data',
   						 ),

		)); ?>

		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<?php echo $form->labelEx($model,'Upload Gambar'); ?>
			<?php echo CHtml::activeFileField($model, 'GAMBAR_GALLERY'); ?> 
			<?php echo $form->error($model,'GAMBAR_GALLERY'); ?>
		</div>
		<?php if($model->isNewRecord!='1'){ ?>
		<div class="row">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->GAMBAR_GALLERY,"image",array("width"=>200)); ?>
		</div>
		<?}?>
		<!-- 
		<div class="row">
			<?php echo $form->labelEx($model,'GAMBAR_GALLERY'); ?>
			<?php echo $form->textArea($model,'GAMBAR_GALLERY',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'GAMBAR_GALLERY'); ?>
		</div> -->

		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
		</div>

		<?php $this->endWidget(); ?>

</div><!-- form -->