<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>
	

<!-- Begin Body -->
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
	<!-- right content column-->
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">TOP UP POINT</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-offset-3 col-sm-5" style="border: 1px solid #ccc;">
						<div class="form">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'topup-point-form',
								'enableAjaxValidation'=>false,
								'htmlOptions' => array(
									'enctype' => 'multipart/form-data',
									),

									)); ?>

									<?php echo $form->errorSummary($model); ?>

									<div class="row">
										Masukkan Point
										<?php echo $form->textField($model,'POINT',array('maxlength'=>10)); ?> 
									</div>
									<div class="row">
										Total Biaya Rp.
										<?php echo $form->textField($model,'biaya',array('readonly'=>true,'style'=>'font-weight: bold;')); ?> 
									</div>
										


									<div class="row buttons">
										<?php echo CHtml::submitButton($model->isNewRecord ? 'OK' : 'Save'); ?>
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

				<?php $this->renderpartial('../layouts/side-social-feed');  ?>
			</div>
			<!-- </div> -->
			<!-- </div> -->

