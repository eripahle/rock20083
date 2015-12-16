<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>
	
<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">UPLOAD GALLERY PRIBADI</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-offset-3 col-sm-5" style="border: 1px solid #ccc;">
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
										<?php echo CHtml::activeFileField($model, 'GAMBAR_GALLERY_PRIBADI'); ?> 
										<?php echo $form->error($model,'GAMBAR_GALLERY_PRIBADI'); ?>
									</div>
									<?php if($model->isNewRecord!='1'){ ?>
									<div class="row">
										<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->GAMBAR_GALLERY_PRIBADI,"image",array("width"=>200)); ?>
									</div>
									<?}?>


									<div class="row buttons">
										<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save'); ?>
									</div>

									<?php $this->endWidget(); ?>

								</div><!-- form -->
							</div>
						</div><!--/panel-body-->
					</div><!--/panel-->
					<!--/end right column-->
					<Br>
					</div> 
				</div>


<div class="col-md-3">
					<?php $this->renderpartial('../layouts/side-social-feed');  ?>          
				</div>

