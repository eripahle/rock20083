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
	$name = "Jennifer Doe Jennifer Doe II";
	$badges = 9;
	$points = 120;
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
						</td>
					</tr>
				</table>
			</div>
		</div>	
	</div>

	

	<div class="col-md-8" >
		<div class="panel" style="min-width=500px;">
		<?php foreach ($data as $data) {?>
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">PROFILE <?php echo CHtml::encode($data['NAMA_LENGKAP']); ?></div>   
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12" style="solid #ccc;">					
						<hr>
						<div class="view">

							<b>NAMA_LENGKAP :</b>
							<?php echo CHtml::encode($data['NAMA_LENGKAP']); ?>
							<br />

							<b> TEMPAT :</b>
							<?php echo CHtml::encode($data['TEMPAT']); ?>
							<br />

							<b> TANGGAL :</b>
							<?php echo CHtml::encode($data['TANGGAL']); ?>
							<br />

							<b> NEGARA :</b>
							<?php echo CHtml::encode($data['NEGARA']); ?>
							<br />

							<b> PROVINSI :</b>
							<?php echo CHtml::encode($data['PROVINSI']); ?>
							<br />

							<b> KOTA :</b>
							<?php echo CHtml::encode($data['KOTA']); ?>
							<br />

							<b> ALAMAT :</b>
							<?php echo CHtml::encode($data['ALAMAT']); ?>
							<br />

							<b> KODE_POS :</b>
							<?php echo CHtml::encode($data['KODE_POS']); ?>
							<br />

							<b> NO_TELP :</b>
							<?php echo CHtml::encode($data['NO_TELP']); ?>
							<br />

							<b> EMAIL :</b>
							<?php echo CHtml::encode($data['EMAIL']); ?>
							<br />

							<b> TWITTER :</b>
							<?php echo CHtml::encode($data['TWITTER']); ?>
							<br />

							<b> NAMA_IBU :</b>
							<?php echo CHtml::encode($data['NAMA_IBU']); ?>
							<br />

							<b> NAMA_AYAH :</b>
							<?php echo CHtml::encode($data['NAMA_AYAH']); ?>
							<br />

							<b> NO_SAKTI :</b>
							<?php echo CHtml::encode($data['NO_SAKTI']); ?>
							<br />

							<b> CORP :</b>
							<?php echo CHtml::encode($data['CORP']); ?>
							<br />
							<b> STATUS_REKONSILIASI :</b>
							<?php echo CHtml::encode($data['STATUS_REKONSILIASI']); ?>
							<br />

							<b> STATUS_RELEASE :</b>
							<?php echo CHtml::encode($data['STATUS_RELEASE']); ?>
							<br />
							<?php
							?>

						</div>
						<br>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/transaksiregistrasi/update/<?php echo CHtml::encode($data['ID_REGISTRASI']); ?>" class="btn btn-success">EDIT</a>
					</div>
				</div><!--/panel-body-->
			</div><!--/panel-->
			<!--/end right column-->
			<Br>
			</div>
			<?php } ?> 
		</div>

		<?php $this->renderpartial('../layouts/side-timeline-news');  ?>
	</div>
	<!-- </div> -->
	<!-- </div> -->


