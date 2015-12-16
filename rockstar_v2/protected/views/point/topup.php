<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>
	

<!-- Begin Body -->
<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">TOP UP POINT</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-offset-3 col-sm-5">
						<div class="form">
						<?php  
										echo CHtml::link(CHtml::encode('Lakukan TopUp'), 
											array('Point/ConfirmTopUp'),
											array(
												'submit'=>array('Point/ConfirmTopUp'),
										'class' => 'btn btn-primary','confirm'=>'Apakah Kamu Yakin Melakukan TopUp Point?'
										));?>
										</div>
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

