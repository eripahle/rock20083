<?php
/* @var $this TransaksiRegistrasiController */
/* @var $data TransaksiRegistrasi */
?>
<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
?>
<!-- Begin Body -->
<div class="col-md-12" style="margin-top:-2%; padding-top:5px; margin-left:-3%; width:106%;">	
	<?php $this->renderpartial('../layouts/navbar2');  ?>
</div>
<div style="min-width:500px; margin-top:40px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<!-- right content column-->

	<?php
	$name = CHtml::encode($data['NAMA_LENGKAP']);
	$badges = 9;
	$points =CHtml::encode($data['POINT']);
	$imageurl = './images/profile/'.$data['FOTO'];
	$kota =  CHtml::encode($data['KOTA']);
		$provinsi = CHtml::encode($data['PROVINSI']);
		$no_sakti = CHtml::encode($data['NO_SAKTI']);
	?>    					
<div class="col-md-12">
	<div class="col-md-6" >

		<div class="panel-heading text-center" style="background-color:#111;color:#fff;">PROFILE</div>   		
		<div class="col-md-12" style="border:2px solid #ccc; margin-bottom:4%; background:white;">
			
			<div>
				<table>
					<tr>
						<td rowspan="4" colspan="4">
							<img src="<?php echo Yii::app()->request->baseUrl.$imageurl; ?>" style="width:90%; padding-top:20px; border:1px solid #ccc;">                      							
						</td>	
						<td colspan="4" rowpan="2">
							<h3 style="color:black;"><b><a><?php echo "  ".$name; ?></a></b></h3>
						</td>
					</tr>
					<tr>
						<td colspan="4">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/rating.png" style="width:50%; margin-bottom:5%"/></h4>						
						<br><br>
							<h4><?php echo $kota.", ".$provinsi;?></b></h4>
						</td>
					</tr>
					<tr>
						<td>
							<h5><b>YOUR ID : <?php echo $no_sakti;?></b></h5>
						</td>
						
					</tr>
					<tr>
						<td>							
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/profile/data" class="btn btn-default">More Detailed...</a>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/coin.png" style="max-width:35px;"/></h4>
						</td>
						<td>
							<h4 style="color:black;"><b><?php echo $points."<br>Points";?></b></h4>
						</td>
						<td>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/badge.png" style="max-width:40px;">
						</td>
						<td>
							<h4 style="color:black;"><b><?php echo $badges."<br>Badges";?></b></h4>
						</td>
					</tr>
				</table>
					<div class="form">
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'foto-profile-form',
						'enableAjaxValidation'=>false,
						'htmlOptions' => array(
							'enctype' => 'multipart/form-data',
							),

							)); ?>

							<div class="row">
								<?php echo $form->labelEx($model,'Ubah Foto Profile'); ?>
								<?php echo CHtml::activeFileField($model, 'FOTO'); ?> 
								<?php echo $form->error($model,'FOTO'); ?>
							</div>
							<div class="row buttons">
								<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save',array('class'=>'btn btn-danger')); ?>
							</div>

							<?php $this->endWidget(); ?>

						</div><!-- form -->
			</div>
		</div>	
		
		
	<div class="col-md-12" >
		<div class="panel">		
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY KOLEKSI</div>   		
			<div class="panel-body">
				<div class="row">
					<div style="solid #ccc;">					
						<hr>
							<?php $i=0;
							foreach ($koleksi as $k) {?>
							<div style="border:1px solid #ccc;padding:10px;overflow:auto;float:left;width:25%;margin-right:2%;height:auto;margin-bottom: 2%;"> 
								<div style="">
								<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/berita/'.$k['GAMBAR_GALLERY'],"image",array("width"=>150)); ?>
								</div>
								<div style="float:right">
									<i><? //$stat['DATETIME_STATUS'] ?></i>
								</div>
								<hr>
								<div>
									<a href="#"> Like </a>
									<form>
										<textarea></textarea>
										<input type="submit" value="Komentar">
									</form>
								</div>
							</div>
							<?php $i++; }?>
						<br>
					</div>
				</div>
			</div>						
		</div>
	</div>

	<div class="col-md-12" >
		<div class="panel">		
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY <?php echo $name; ?></div>		
			<div class="panel-body">
				<div class="row">
					<div style="solid #ccc;">					
						<hr>
						<?php foreach ($gallery as $g) {?>
						<div style="border:1px solid #ccc;padding:10px;overflow:auto;float:left;width:25%;margin-right:2%;height:auto;margin-bottom: 2%;"> 
							<?echo CHtml::link(CHtml::encode('Delete image'), array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY_PRIBADI),
							  array(
							    'submit'=>array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY_PRIBADI),
							    'class' => 'delete','confirm'=>'This will remove the image. Are you sure?'
							  ));
						  	?>
							<div>
								<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$g->GAMBAR_GALLERY_PRIBADI,"image",array("width"=>150)); ?>
							</div>
							<div style="float:right">
								<i><? //$stat['DATETIME_STATUS'] ?></i>
							</div>	<hr>
							<div>
								<a href="#"> Like </a>
								<form>
									<textarea></textarea>
									<input type="submit" value="Komentar">
								</form>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-6" >
	<div class="panel" style="min-height:650px;">
		<div class="panel-heading text-center" style="background-color:#111;color:#fff;">STATUS UPDATE</div>   
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12" style="solid #ccc;">
				</div>
			</div>
		</div>
	</div>
</div>

</div>



