<?php
/* @var $this GalleryBarangController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY BARANG</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-12" style="border: 1px solid #ccc;">

						<div>
							<?php foreach ($gallery as $g) {?>
							<div style="border:1px solid #ccc;padding:10px;overflow:auto;float:left;width:30%;margin-right:2%;height:auto;margin-bottom: 2%;"> 
								<?php if(Yii::app()->user->getState('role') == 2){
									echo CHtml::link(CHtml::encode('Delete image'), array('GalleryBarang/delete', 'id'=>$g->ID_GALLERY_BARANG),
										array(
											'submit'=>array('GalleryBarang/delete', 'id'=>$g->ID_GALLERY_BARANG),
											'class' => 'delete','confirm'=>'This will remove the image. Are you sure?'
											));
								}
								?>
								<div style="">
									<?php
									$id = Yii::app()->user->getId();
									
									if($g->HARGA_POINT == 0 && $g->HARGA_CASH == 0){
										echo CHtml::link(CHtml::encode('Free'), 
											array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
											array(
												'submit'=>array('Produk/BuyFree', 'id'=>$g->ID_GALLERY_BARANG),
												'class' => 'btn btn-danger','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini?'
												));
									}
									if($g->HARGA_POINT != 0){
										echo CHtml::link(CHtml::encode('Point'), 
											array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
											array(
												'submit'=>array('Produk/BuyByPoint', 'id'=>$g->ID_GALLERY_BARANG),
												'class' => 'btn btn-primary','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Point?'
												));
									}
									if ($g->HARGA_CASH != 0) {
										echo CHtml::link(CHtml::encode('Cash'), 
											array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
											array(
												'submit'=>array('Produk/Buybycash', 'id'=>$g->ID_GALLERY_BARANG),
												'class' => 'btn btn-success','confirm'=>'Apakah Kamu Yakin Membeli Produk Ini Dengan Cash?'
												));
									}
									?>
									
									<h3><?php echo $g->NAMA_GALLERY?> - <?php echo $g->JENIS_GALLERY?> </h3>
									<?php $infoFile = pathinfo(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY); ?>
									<?php if($infoFile['extension'] == 'gif' || $infoFile['extension'] == 'jpg' || $infoFile['extension'] == 'png' ) {?>
									<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY,"image",array("width"=>150)); ?>
									<?php }else{?>
									<video width="100%" controls>
										<source src="<?php echo Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY ?>" type="video/mp4" />
											Your browser does not support HTML5 video.
										</video>
										<?php } ?>
									</div>
									<div style="float:right">
										<i><? //$stat['DATETIME_STATUS'] ?></i>
									</div>
									<hr>
									<div>
										<span>Harga Point</span> : <b><?php echo $g->HARGA_POINT?></b><br>
										<span>Harga Point Bonus</span> : <b><?php echo $g->HARGA_POINT_BONUS?></b><br>
										<span>Harga Cash</span> : <b><?php echo $g->HARGA_CASH?></b><br>

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

								<? } 

// $this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// )); ?>
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
