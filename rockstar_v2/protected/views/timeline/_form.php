<?php
/* @var $this TimelineController */
/* @var $model Status */
/* @var $form CActiveForm */
?>
			
<div style="margin-bottom:40px;">
			<div class="m-l-lg" style="padding-left:1%; padding:2%; margin-top:30px;">		
<div class="form m-b-none">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'status-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="input-group">
		<?php echo $form->textField($model,'KONTEN',array('class'=>'form-control input-lg','placeholder'=>'Input your status here...')); ?>
<span class="input-group-btn">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Post' : 'Save',array('class'=>'btn btn-info btn-lg')); ?>
		</span>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
		</div>