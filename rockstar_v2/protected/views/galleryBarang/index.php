<?php
/* @var $this GalleryBarangController */
/* @var $dataProvider CActiveDataProvider */
?>
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	<!-- right content column-->
	<div class="col-md-9" >
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
										<a href="#" class="btn btn-primary"> Point </a>
										<a href="#" class="btn btn-primary"> Cash </a>
										<h3><?php echo $g->NAMA_GALLERY?> - Jenis <?php echo $g->JENIS_GALLERY?> </h3>
											<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/berita/'.$g->SAMPEL_GALLERY,"image",array("width"=>150)); ?>
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

<?php $this->renderpartial('../layouts/side-social-feed');  ?>
<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>
<!-- </div> -->
			<!-- </div> -->