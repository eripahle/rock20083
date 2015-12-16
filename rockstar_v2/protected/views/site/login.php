<!-- <header>
    <div class="col-md-12">
      <div class="col-md-10"></div>
      <div class="col-md-2"><br />        
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/login"><button class="btn btn-block btn-lg btn-warning">Login Here</button></a>    
      </div>
    </div>
</header> -->

<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">LOGIN</div>   
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
									<div class="row">
										<?php echo $form->labelEx($model,'nomor_sakti'); ?>
										<?php echo $form->textField($model,'nomor_sakti',array('style' => 'width: 220px; border-radius: 0px;','class'=>'form-control')); ?>
										<?php echo $form->error($model,'nomor_sakti'); ?>
									</div>

									<div class="row">
										<?php echo $form->labelEx($model,'password'); ?>
										<?php echo $form->passwordField($model,'password',array('style' => 'width: 220px; border-radius: 0px;','class'=>'form-control')); ?>
										<?php echo $form->error($model,'password'); ?>
									</div>

									<div class="row rememberMe">
										<?php echo $form->checkBox($model,'rememberMe'); ?>
										<?php echo $form->label($model,'rememberMe'); ?>
										<?php echo $form->error($model,'rememberMe'); ?>
									</div>

									<div class="row buttons">
										<?php echo CHtml::submitButton('Login'); ?>
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
