<!-- <header>
    <div class="col-md-12">
      <div class="col-md-10"></div>
      <div class="col-md-2"><br />        
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/login"><button class="btn btn-block btn-lg btn-warning">Login Here</button></a>    
      </div>
    </div>
</header> -->

<!-- Begin Body -->
<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
	<!-- right content column-->
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GANTI PASSWORD</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-offset-3 col-sm-5" style="border: 1px solid #ccc;">
						<div class="form">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,
									),
									)); ?>
									<div class="row"> <?php echo $form->labelEx($model,'old_password'); ?> 
									<?php echo $form->passwordField($model,'old_password'); ?> 
									<?php echo $form->error($model,'old_password'); ?> </div>

									<div class="row"> <?php echo $form->labelEx($model,'new_password'); ?> 
									<?php echo $form->passwordField($model,'new_password'); ?> 
									<?php echo $form->error($model,'new_password'); ?> </div>

									<div class="row"> <?php echo $form->labelEx($model,'repeat_password'); ?> 
									<?php echo $form->passwordField($model,'repeat_password'); ?> 
									<?php echo $form->error($model,'repeat_password'); ?> </div>

									<div class="row buttons">
										<?php echo CHtml::submitButton('Ganti Password'); ?>
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



