<?php
/* @var $this TransaksiRegistrasiController */
/* @var $model TransaksiRegistrasi */
/* @var $form CActiveForm */
?>
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
	<div class="col-md-7">
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">CONFIRM TOPUP</div>   
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
					<?php echo 'Virtual Account Anda  <b>'.Yii::app()->user->getFlash('Virtual Account'); ?></b>
				
						<br>
						<font color="red"> * Silahkan Transfer Biaya ke Virtual Account Diatas</font><br>
						<font color="red">   Nilai Point adalah biaya / 5000 </font><br>
						<font color="red"> * Silahkan Cek Email Anda </font><b>
					<?php echo Yii::app()->user->getFlash('Email'); ?></b><br>
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/point/topup" class="btn btn-success">OK</a>

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
