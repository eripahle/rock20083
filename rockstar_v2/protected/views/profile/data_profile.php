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

	<?php  foreach ($data as $data) {
	$name = CHtml::encode($data['NAMA_LENGKAP']);
	$badges = 9;
	$points =CHtml::encode($data['POINT']);
	$imageurl = "/media/b20.jpg";
	$kota =  CHtml::encode($data['KOTA']);
		$provinsi = CHtml::encode($data['PROVINSI']);
		$no_sakti = CHtml::encode($data['NO_SAKTI']);;
	?>    					
	
	<div class="col-md-6" style="border:2px solid #ccc; margin-bottom:5%; background:whitesmoke;">
			<div style="min-height:230px;">
				<table style="min-width:330px">
					<tr>
						<td rowspan="4" colspan="4">
							<img src="<?php echo Yii::app()->request->baseUrl.$imageurl; ?>" style="width:90%; padding-top:20px;">                      							
						</td>	
						<td colspan="4" rowpan="2">
							<h3 style="color:black;"><b><a><?php echo "  ".$name; ?></a></b></h3>
						</td>
					</tr>
					<tr>
						
						<td>
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
			</div>
		</div>
	

	<div class="col-md-6" >
		<div class="panel" style="min-width=500px;">		
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">PROFILE <?php echo CHtml::encode($data['NAMA_LENGKAP']); ?></div>   
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12" style="solid #ccc;">	
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
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/profile/update" class="btn btn-success">EDIT</a>
					</div>
				</div><!--/panel-body-->
			</div><!--/panel-->
			<!--/end right column-->
			<Br>
			</div>
			<?php } ?> 
		</div>
	</div>
	<!-- </div> -->
	<!-- </div> -->


