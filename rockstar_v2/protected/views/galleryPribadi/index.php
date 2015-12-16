<?php
/* @var $this GalleryPribadiController */
/* @var $dataProvider CActiveDataProvider */
?>
<!-- Begin Body -->
<div class="col-md-2" >
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
</div>

	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">GALLERY PRIBADI</div>   
			<div class="panel-body">
				<br>
				<div class="row">
					<div class="col-sm-12" style="border: 1px solid #ccc;">
<div>
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
