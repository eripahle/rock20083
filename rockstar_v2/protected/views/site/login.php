<!-- <header>
    <div class="col-md-12">
      <div class="col-md-10"></div>
      <div class="col-md-2"><br />        
        <a href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/site/login"><button class="btn btn-block btn-lg btn-warning">Login Here</button></a>    
      </div>
    </div>
</header> -->

<div style="margin-left:5%; margin-right:5%; margin-top:-2%;">
  <?php $this->renderpartial('../layouts/navbar1');  ?>
  <div class="clear"></div>  

  <div style="width:100%; margin-left:0%; margin-top:40px;">
	
	<!-- right content column-->
	<div class="col-md-12" >
		<!-- <div class="panel" style="min-width=500px;"> -->
		<br />
			<div class="text-center h2">LOGIN</div>   
			<!-- <div class="panel-body"> -->
			<br>
				<div class="m-b-lg">
					<div class="col-sm-offset-4 col-sm-5" style="margin-left:30%;">
						<div class="form">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',
								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,
									),
									)); ?>
									<div class="row">
										<!-- <?php echo $form->labelEx($model,'nomor_sakti'); ?> -->
										<?php echo $form->textField($model,'nomor_sakti',array('placeholder' =>'Username' , 'style' => 'form-control no-border width:330px; height:48px; margin-bottom:-1%; padding-bottom:-1%; ','class'=>'form-control')); ?>
										<?php echo $form->error($model,'nomor_sakti'); ?>
									</div>

									<div class="row">
										<!-- <?php echo $form->labelEx($model,'password'); ?> -->
										<?php echo $form->passwordField($model,'password',array('placeholder' =>'Password', 'style' => 'form-control no-border width:330px; height:48px; margin-top:1px; padding-top:1px;','class'=>'form-control')); ?>
										<?php echo $form->error($model,'password'); ?>
									</div>

									<div class="row rememberMe">
										<?php echo $form->checkBox($model,'rememberMe'); ?>
										<?php echo $form->label($model,'rememberMe'); ?>
										<?php echo $form->error($model,'rememberMe'); ?>
									</div>

									<div class="row buttons">
										<?php echo CHtml::submitButton('Login',array('class' => 'btn btn-lg btn-primary btn-block')); ?>
									</div>

									<?php $this->endWidget(); ?>
								</div><!-- form -->
							</div>
						</div><!--/panel-body-->
					</div><!--/panel-->
					<!--/end right column-->
					<Br>
				</div> 
			<!-- </div>

			
		</div> -->
		<!-- </div> -->
		<!-- </div> -->



