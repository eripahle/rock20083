<?php
/* @var $this GalleryPribadiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gallery Pribadis',
);

$this->menu=array(
	array('label'=>'Create GalleryPribadi', 'url'=>array('create')),
	array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
	// array('label'=>'List GalleryPribadi', 'url'=>array('index')),
	// array('label'=>'Create GalleryPribadi', 'url'=>array('create')),
	// array('label'=>'Update GalleryPribadi', 'url'=>array('update', 'id'=>$model->ID_GALLERY)),
	// array('label'=>'Delete GalleryPribadi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_GALLERY),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage GalleryPribadi', 'url'=>array('admin')),
);
?>

<h1>Gallery Pribadi</h1>
<div>
<?php foreach ($gallery as $g) {?>
<div style="border:1px solid #ccc;padding:10px;overflow:auto;float:left;width:25%;margin-right:2%;height:250px;margin-bottom: 2%;"> 
	<?echo CHtml::link(CHtml::encode('Delete image'), array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY),
  array(
    'submit'=>array('GalleryPribadi/delete', 'id'=>$g->ID_GALLERY),
    'class' => 'delete','confirm'=>'This will remove the image. Are you sure?'
  ));
  ?>
	<div style="">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$g->GAMBAR_GALLERY,"image",array("width"=>150)); ?>
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