<?php
/* @var $this TransaksiRegistrasiController */
/* @var $data TransaksiRegistrasi */
?>
<?php
/* @var $this TimelineController */
/* @var $dataProvider CActiveDataProvider */
?>
<!-- Begin Body -->
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<!-- right content column-->
	<?php
	$name = CHtml::encode($data['NAMA_LENGKAP']);
	$badges = 9;
	$points =CHtml::encode($data['POINT']);
	$imageurl = "/media/b20.jpg";
	?>    					
	<div class="col-md-12">
		<div style="min-height:230px; padding-bottom:15px">

			<div class="col-md-5" style="min-width:350px; padding-bottom:20px; min-height:140px; background:whitesmoke;">
				<table style="min-width:330px">
					<tr>
						<td colspan="3" rowpan="2">
							<h3 style="color:black;"><b><?php echo "  ".$name; ?></b></h3>
						</td>
						<td rowspan="4" colspan="4">
							<img src="<?php echo Yii::app()->request->baseUrl.$imageurl; ?>" style="max-width:150px; padding-top:20px;">                      							
						</td>	
					</tr>
					<tr>
						<td>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/coin.png" style="max-width:30px;"/></h4>
						</td>
						<td>
							<h4><b><?php echo $points." Points";?></b></h4>
						</td>
					</tr>
					<tr>
						<td>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/media/badge.png" style="max-width:40px;">
						</td>
						<td>
							<h4 ><b><?php echo $badges." Badges";?></b></h4>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/profile/data" class="btn btn-success">DATA PROFILE</a>
						</td>
					</tr>
				</table>
			</div>
		</div>	
	</div>

	

	<div class="col-md-8" >
		<div class="panel" style="min-width=500px;">
		
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY KOLEKSI <?php echo CHtml::encode($data['NAMA_LENGKAP']); ?></div>   
		
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12" style="solid #ccc;">					
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
				</div><!--/panel-body-->
			</div><!--/panel-->
			<!--/end right column-->
			<Br>
			</div>
		</div>

		<div class="col-md-8" >
		<div class="panel" style="min-width=500px;">
		
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY PRIBADI <?php echo CHtml::encode($data['NAMA_LENGKAP']); ?></div>   
		
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12" style="solid #ccc;">					
						<hr>
						<?php foreach ($gallery as $g) {?>
<div style="border:1px solid #ccc;padding:10px;overflow:auto;float:left;width:25%;margin-right:2%;height:auto;margin-bottom: 2%;"> 
	<?echo CHtml::link(CHtml::encode('Delete image'), array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY_PRIBADI),
  array(
    'submit'=>array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY_PRIBADI),
    'class' => 'delete','confirm'=>'This will remove the image. Are you sure?'
  ));
  ?>
	<div style="">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$g->GAMBAR_GALLERY_PRIBADI,"image",array("width"=>150)); ?>
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

<?php }?>
						<br>
					</div>
				</div><!--/panel-body-->
			</div><!--/panel-->
			<!--/end right column-->
			<Br>
			</div>
		</div>

		<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
	</div>
	<!-- </div> -->
	<!-- </div> -->


