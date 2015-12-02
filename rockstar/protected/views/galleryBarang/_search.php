<?php
/* @var $this GalleryBarangController */
/* @var $model GalleryBarang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_GALLERY_BARANG'); ?>
		<?php echo $form->textField($model,'ID_GALLERY_BARANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_USERS'); ?>
		<?php echo $form->textField($model,'ID_USERS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_GALLERY'); ?>
		<?php echo $form->textField($model,'NAMA_GALLERY',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODE_GALLERY'); ?>
		<?php echo $form->textField($model,'KODE_GALLERY',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS_GALLERY'); ?>
		<?php echo $form->textField($model,'JENIS_GALLERY',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAMPEL_GALLERY'); ?>
		<?php echo $form->textArea($model,'SAMPEL_GALLERY',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GAMBAR_GALLERY'); ?>
		<?php echo $form->textArea($model,'GAMBAR_GALLERY',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_POINT'); ?>
		<?php echo $form->textField($model,'HARGA_POINT',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_POINT_BONUS'); ?>
		<?php echo $form->textField($model,'HARGA_POINT_BONUS',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_CASH'); ?>
		<?php echo $form->textField($model,'HARGA_CASH',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->